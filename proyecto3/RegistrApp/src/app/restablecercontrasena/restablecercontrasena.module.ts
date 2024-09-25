import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { RestablecercontrasenaPageRoutingModule } from './restablecercontrasena-routing.module';

import { RestablecercontrasenaPage } from './restablecercontrasena.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    RestablecercontrasenaPageRoutingModule
  ],
  declarations: [RestablecercontrasenaPage]
})
export class RestablecercontrasenaPageModule {}
