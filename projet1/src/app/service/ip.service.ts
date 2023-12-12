import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class IpService {

  constructor(private Http:HttpClient) { }

  public getIPaddress() : Observable<any>
  {
    return this.Http.get("http://api.ipify.org/?format=json")
  }
}
