import { Component } from '@angular/core';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrl: './login.component.css'
})
export class LoginComponent {

}




// import { Component } from '@angular/core';
// import { LoginService } from '../../services/login.service';

// @Component({
//   selector: 'app-login',
//   templateUrl: './login.component.html'
// })
// export class LoginComponent {
//   email = '';
//   password = '';

//   constructor(private loginService: LoginService) {}

//   onLogin() {
//     this.loginService.login({ email: this.email, password: this.password })
//       .subscribe({
//         next: (res: any) => {
//           if (res.status === 'success') {
//             localStorage.setItem('user', JSON.stringify(res.user));
//             alert('Login successful!');
//             // TODO: navigate to dashboard
//           } else {
//             alert(res.message);
//           }
//         },
//         error: () => {
//           alert('Login failed!');
//         }
//       });
//   }
// }
