import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { RestablecercontrasenaPage } from './restablecercontrasena.page';

const routes: Routes = [
  {
    path: '',
    component: RestablecercontrasenaPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class RestablecercontrasenaPageRoutingModule {}
