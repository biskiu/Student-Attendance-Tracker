import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class LoginService {

  constructor() { }
}


// import { Injectable } from '@angular/core';
// import { HttpClient } from '@angular/common/http';
// import { environments } from '../environments/environment.development';
// import { Observable } from 'rxjs';

// @Injectable({
//   providedIn: 'root'
// })
// export class LoginService {
//   url: string = environments.apiUrl;

//   constructor(
//     private http: HttpClient
//   ) { }

//   login(credentials: { email: string; password: string }): Observable<any> {
//     return this.http.post<any>(this.url + 'login', credentials);
//   }
// }
