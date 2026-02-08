import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { environments } from '../environments/environment.development';

@Injectable({
  providedIn: 'root'
})
export class StudentsService {
  url:string = environments.apiUrl
  constructor(
    private http:HttpClient
  ) { }

  GetList():Observable<any>{
    return this.http.get<any>(this.url+'student/get')
  }


}
