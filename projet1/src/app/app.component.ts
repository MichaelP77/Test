import { Component } from '@angular/core';
import { IpService } from './service/ip.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  constructor(private ipService:IpService){}

  title: string = 'projet titre';
  ipAddress: string = 'Unkwon IP';

  ngOnInit() {
    this.getIP();
}

  getIP()
  {
    this.ipService.getIPaddress().subscribe((res:any)=>{
      this.ipAddress=res.ip;
    });
  }
}
