import { AuthService } from 'src/app/common/services/auth.service';
import { UserMatchResource } from './../../resources/user/match';
import { Component } from '@angular/core';
import { IUserImage } from 'src/app/resources/user';
import { Observable, BehaviorSubject } from 'rxjs';
import { slide } from './animations';

@Component({
    selector: 'matching',
    templateUrl: './matching.component.html',
    styleUrls: ['./matching.component.scss'],
    animations: slide

})
export class MatchingComponent {

    state = 'mid';
    /**  */
    loadingComplete = false;

    /**  */
    currentMatching: IUserImage;

    /**  */
    matchings$: BehaviorSubject<IUserImage[]>;

    /** */
    loadedMatches: IUserImage[] = [];

    constructor(protected userMatchResource: UserMatchResource,
        protected authService: AuthService) {
        this.matchings$ = new BehaviorSubject([]);
        this.reloadMatches();

        this.matchings$.subscribe(images => {
            this.loadingComplete = true;
            this.loadedMatches = images;
            this.pickAnyImage(images);
        })
    }

    /**
     *
     */
    reloadMatches() {
        this.userMatchResource.query({user_id: this.authService.currentUser().id})
            .then(images => {
                this.matchings$.next(images);
            })
    }

    /**
     *
     * @param images
     */
    pickAnyImage(images: IUserImage[]) {
        if (images.length > 0) {
            this.currentMatching = images[0];
        } else {
            this.currentMatching = null;
        }
    }

    /**
     *
     */
    pickAndPopNextImage() {
        return this.currentMatching = this.loadedMatches.pop();
    }

    /**
     *
     * @param image
     */
    match(image: IUserImage) {
        this.effectiveMatching(image, true);
    }

    /**
     *
     * @param image
     */
    noMatch(image: IUserImage) {
        this.effectiveMatching(image, false);
    }


    /**
     *
     * @param image
     * @param match
     */
    protected effectiveMatching(image: IUserImage, match: boolean) {
        this.userMatchResource.match({
            user_id: this.authService.currentUser().id,
            id: image.id,
            match: match
        }).then(() => {
            if (this.loadedMatches.length < 2) {
                this.reloadMatches();
            } else {
                this.pickAndPopNextImage();
            }
        })
    }

    /**
     * Shuffles array in place. ES6 version
     * @param {Array} a items An array containing the items.
     */
    protected shuffle(a) {
        for (let i = a.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [a[i], a[j]] = [a[j], a[i]];
        }
        return a;
    }


    /**
    * for slide animation
    */

  animationCallback(event$){
    if(this.state==='left'){
      this.noMatch(this.currentMatching);
      this.state='hidden';
    } else if(this.state==='right') {
      this.match(this.currentMatching)
      this.state='hidden';
    } else if(this.state==='hidden') {
      this.state='mid';
    }
  }

  toggleState(newState: string) {
    if(this.state === 'mid'){
      this.state = newState;
    }
  }

}
