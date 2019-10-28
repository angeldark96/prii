@extends('layouts.app')

@section ('contenido')
    <div class="page-content-wrapper-inner">
        <div class="content-viewport">
           {{-- <div class="row">
                <div class="col-12 py-5">
                    <h4>Tablero</h4>
                    <p class="text-gray">Bienvenido ,  {{ Auth::user()->name }}</p>
                </div>
            </div>--}}

               {{-- <div class="viewport-header">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb has-arrow">
                            <li class="breadcrumb-item"><a href="#">Gestion de datos</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Crear Proyecto</li>
                        </ol>
                    </nav>
                </div>--}}
                <div class="content-viewport">
                    <div class="row">
                        <div class="col-lg-12 equel-grid">
                            <div class="grid">
                                <p class="grid-header">Ubicación</p>


                                <div class="grid-body">
                                    <div class="item-wrapper">
                                        <div class="form-group row showcase_row_area">
                                            <div class="col-md-3 showcase_text_area">
                                                <label for="text">Buscar</label>
                                            </div>
                                            <div class="col-md-9 showcase_content_area">
                                                <input type="text" class="form-control" id="searchmap" placeholder="Localizar Ubicacion">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="item-wrapper">
                                        <div id="map" style="height: 400px;width: auto">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 equel-grid">
                            <div class="grid">
                                <p class="grid-header">01 - Datos Generales</p>
                                <div class="grid-body">
                                    <div class="item-wrapper">
                                        <form>
                                            <div class="form-group row showcase_row_area">

                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="inputEmail10">Cliente</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <input type="text" class="form-control" id="cliente" name="cliente">
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="inputEmail4">Unidad Minera</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <input type="text" class="form-control" id="um" name="um">
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="inputEmail4">Tipo de explotacion</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <input type="text" class="form-control" id="tipo_explotacion" name="tipo_explotacion">
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="inputEmail4">Minerales</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <input type="text" class="form-control" id="minerales" name="minerales">
                                                </div>
                                            </div>
                                           {{-- <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="inputEmail5">Password</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <input type="password" class="form-control" id="inputEmail5" placeholder="Enter your password">
                                                </div>
                                            </div>--}}

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 equel-grid">
                            <div class="grid">
                                <p class="grid-header">03 - Coordenadas</p>
                                <div class="grid-body">
                                    <div class="item-wrapper">
                                        <form>
                                            <div class="form-group row showcase_row_area">

                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="inputEmail10">Latitud</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <input type="text" class="form-control" id="latitud" name="latitud" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="inputEmail4">Altitud</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <input type="text" class="form-control" id="longitud" name="longitud" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">

                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="inputEmail10">Medicion</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <input type="text" class="form-control" id="medicion" name="medicion" placeholder="Ejem. Calicatas">
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="inputEmail4">Prof. Total (m)</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <input type="text" class="form-control" id="profundidad" name="profundidad" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="inputEmail4">Nivel de agua (m)</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <input type="text" class="form-control" id="nivel_agua" name="nivel_agua" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="inputEmail4">Suelo orgánico
                                                        (m)</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <input type="text" class="form-control" id="nivel_organico" name="nivel_organico" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="inputEmail4">Nivel de roca (m)</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <input type="text" class="form-control" id="nivel_roca" name="nivel_roca" placeholder="">
                                                </div>
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 equel-grid">
                            <div class="grid">
                                <p class="grid-header">02 - Informacion existente</p>
                                <div class="grid-body">
                                    <div class="item-wrapper">
                                        <form>
                                            <div class="form-group row showcase_row_area">

                                                <div class="col-md-5 showcase_text_area">
                                                    <label for="inputEmail10">Componentes mineros existentes</label>
                                                </div>
                                                <div class="col-md-7 showcase_content_area">
                                                    <textarea class="form-control" id="componentes" name="componentes" cols="12" rows="5"></textarea>
                                                </div>
                                            </div>

                                            {{-- <div class="form-group row showcase_row_area">
                                                 <div class="col-md-3 showcase_text_area">
                                                     <label for="inputEmail5">Password</label>
                                                 </div>
                                                 <div class="col-md-9 showcase_content_area">
                                                     <input type="password" class="form-control" id="inputEmail5" placeholder="Enter your password">
                                                 </div>
                                             </div>--}}
                                            <button type="button" class="btn btn-sm btn-primary " id="guardarBD" >Guardar </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--<div class="col-lg-12">
                            <div class="grid">
                                <p class="grid-header">Input Types</p>
                                <div class="grid-body">
                                    <div class="item-wrapper">
                                        <div class="row mb-3">
                                            <div class="col-md-8 mx-auto">
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label for="inputType1">Name</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area">
                                                        <input type="text" class="form-control" id="inputType1" value="Sara Watson">
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label for="inputType12">Email</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area">
                                                        <input type="email" class="form-control" id="inputType2" value="asfabiv@rud.eu">
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label for="inputType13">Password</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area">
                                                        <input type="password" class="form-control" id="inputType3" value="00000000">
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label for="inputType1">Number</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area">
                                                        <input type="number" class="form-control" id="inputType4" value="83393922">
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label for="inputType5">Disabled</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area">
                                                        <input type="text" class="form-control" id="inputType5" value="Hulda Stevenson" disabled="disabled">
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label for="inputType7">Placeholder</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area">
                                                        <input type="text" class="form-control" id="inputType7" placeholder="Placeholder Text">
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label for="inputType8">Read-only</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area">
                                                        <input type="text" class="form-control" id="inputType8" readonly="readonly" value="Hulda Stevenson">
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label for="inputType9">Textarea</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area">
                                                        <textarea class="form-control" id="inputType9" cols="12" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                       {{-- <div class="col-lg-12">
                            <div class="grid">
                                <p class="grid-header">Form Elements</p>
                                <div class="grid-body">
                                    <div class="item-wrapper">
                                        <div class="row">
                                            <div class="col-md-8 mx-auto">
                                                <div class="row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label>Custom Select</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area">
                                                        <select class="custom-select">
                                                            <option selected="selected">Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label>Custom Select (Multiple)</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area">
                                                        <select class="custom-select" multiple="multiple">
                                                            <option>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option selected="selected" value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row showcase_row_area mb-3">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label>Range Slider</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area">
                                                        <div class="form-group mb-0">
                                                            <input type="range" class="custom-range">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label>Radio</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area">
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label class="radio-label mr-4">
                                                                    <input name="sample" type="radio" checked="checked">Option 1 <i class="input-frame"></i></label>
                                                            </div>
                                                            <div class="radio">
                                                                <label class="radio-label">
                                                                    <input name="sample" type="radio">Option 2 <i class="input-frame"></i></label>
                                                            </div>
                                                        </div>
                                                        <div class="form-inline">
                                                            <div class="radio mb-3">
                                                                <label class="radio-label mr-4">
                                                                    <input name="sample" type="radio" checked="checked">Option 1 <i class="input-frame"></i></label>
                                                            </div>
                                                            <div class="radio mb-3">
                                                                <label class="radio-label">
                                                                    <input name="sample" type="radio">Option 2 <i class="input-frame"></i></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label>Checkbox</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area">
                                                        <div class="form-group">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" class="form-check-input"> Default <i class="input-frame"></i></label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" class="form-check-input" checked="checked"> Checked <i class="input-frame"></i></label>
                                                            </div>
                                                        </div>
                                                        <div class="form-inline">
                                                            <div class="checkbox mb-3">
                                                                <label>
                                                                    <input type="checkbox" class="form-check-input"> Default <i class="input-frame"></i></label>
                                                            </div>
                                                            <div class="checkbox mb-3">
                                                                <label>
                                                                    <input type="checkbox" class="form-check-input" checked="checked"> Checked <i class="input-frame"></i></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row showcase_row_area mb-3">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label>File Upload</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                        {{--<div class="col-lg-12">
                            <div class="grid">
                                <p class="grid-header">Advanced Elements</p>
                                <div class="grid-body">
                                    <div class="item-wrapper">
                                        <div class="row">
                                            <div class="col-md-8 mx-auto">
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label for="inputType12">Tag Inputs</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area mb-0">
                                                        <input type="text" class="form-control" data-role="tagsinput" value="Amsterdam,Washington,Sydney,Beijing,Cairo">
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label for="inputType13">Select2</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area">
                                                        <div class="form-group">
                                                            <select id="js-select-example" class="form-control" name="country">
                                                                <option value="Togo">Togo</option>
                                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                <option value="Laos">Laos</option>
                                                                <option value="Andorra">Andorra</option>
                                                                <option value="Cayman Islands">Cayman Islands</option>
                                                                <option value="Falkland Islands">Falkland Islands</option>
                                                                <option value="Norway">Norway</option>
                                                                <option value="American Samoa">American Samoa</option>
                                                                <option value="Palau">Palau</option>
                                                                <option value="Pakistan">Pakistan</option>
                                                                <option value="Malta">Malta</option>
                                                                <option value="Belize">Belize</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label for="inputType14">Bootstrap Switch</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area mb-2">
                                                        <div class="demo-wrapper">
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" id="customSwitch1" checked="checked">
                                                                <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                                                            </div>
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" disabled="disabled" id="customSwitch2">
                                                                <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area mb-3">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label for="inputType14">Switchery</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area mb-n3">
                                                        <div class="demo-wrapper">
                                                            <input type="checkbox" id="switchery-success" checked="checked">
                                                            <input type="checkbox" id="switchery-primary" checked="checked">
                                                            <input type="checkbox" id="switchery-danger" checked="checked">
                                                            <input type="checkbox" id="switchery-warning" checked="checked">
                                                            <input type="checkbox" id="switchery-info" checked="checked">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label for="inputType14">Date Picker</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area mb-2 pl-1">
                                                        <div class="demo-wrapper">
                                                            <div id="datepicker-popup" class="input-group date datepicker">
                                                                <input type="text" class="form-control"> <span class="input-group-addon input-group-append"><span class="mdi mdi-calendar input-group-text"></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label for="inputType14">Vertical Slider</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area mb-1">
                                                        <div class="demo-wrapper">
                                                            <div id="ul-slider-6" class="ul-slider slider-primary"></div>
                                                            <div id="ul-slider-7" class="ul-slider slider-danger"></div>
                                                            <div id="ul-slider-8" class="ul-slider slider-warning"></div>
                                                            <div id="ul-slider-9" class="ul-slider slider-info"></div>
                                                            <div id="ul-slider-10" class="ul-slider slider-success"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label for="inputType14">Horizontal Slider</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area mb-1">
                                                        <div class="demo-wrapper">
                                                            <div id="ul-slider-1" class="ul-slider slider-primary"></div>
                                                            <div id="ul-slider-2" class="ul-slider slider-danger"></div>
                                                            <div id="ul-slider-3" class="ul-slider slider-warning"></div>
                                                            <div id="ul-slider-4" class="ul-slider slider-info"></div>
                                                            <div id="ul-slider-5" class="ul-slider slider-success"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label for="inputType14">Range Range</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area mb-2">
                                                        <div class="demo-wrapper">
                                                            <div id="skipstep-connect" class="ul-slider slider-primary"></div>
                                                            <div class="d-flex justify-content-between">
                                                                <p>Value: <span id="skip-value-lower-3">50.00</span></p>
                                                                <p>Value: <span id="skip-value-upper-3">90.00</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="grid">
                                <p class="grid-header">Inputs Sizes</p>
                                <div class="grid-body">
                                    <div class="item-wrapper">
                                        <div class="row">
                                            <div class="col-md-8 mx-auto">
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label for="inputType12">Large</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area">
                                                        <input type="text" class="form-control form-control-lg" id="inputType12" value="Sara Watson">
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label for="inputType13">Default</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area">
                                                        <input type="text" class="form-control" id="inputType13" value="Sara Watson">
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                        <label for="inputType14">Small</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area">
                                                        <input type="text" class="form-control form-control-sm" id="inputType14" value="Sara Watson">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                    </div>
                </div>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document ).ready(function() {
            $("#guardarBD").click(function() {
                grabarPrii();
            });
        });


        function grabarPrii(){

            var objPrii={cliente: "",um:"",tipo_explotacion:"",minerales:"",latitud:"",longitud:"",medicion:"",profundidad:"",nivel_agua:"",
                nivel_organico:"",nivel_roca:"",componentes:"",lugar:""};

            objPrii.lugar=$("#searchmap").val();
            objPrii.cliente=$("#cliente").val();
            objPrii.um=$("#um").val();
            objPrii.tipo_explotacion=$("#tipo_explotacion").val();
            objPrii.minerales=$("#minerales").val();
            objPrii.latitud=$("#latitud").val();
            objPrii.longitud=$("#longitud").val();
            objPrii.medicion=$("#medicion").val();
            objPrii.profundidad=$("#profundidad").val();
            objPrii.nivel_agua=$("#nivel_agua").val();
            objPrii.nivel_organico=$("#nivel_organico").val();
            objPrii.nivel_roca=$("#nivel_roca").val();
            objPrii.componentes=$("#componentes").val();
            objPrii._token = $('input[name="_token"]').first().val();


            //  console.log(objPrii.cproyecto, objPrii.cf, objPrii.cfinicio, objPrii.cfvigencia);

            swal({
                    title: " Desea guardar la informacion",
                    text: "Presione Guardar, para el correcto ingreso de datos al sistema",
                    type: "info",
                    html: true,
                    showCancelButton: true,
                    confirmButtonText: "Guardar",
                    confirmButtonColor: "green",
                    cancelButtonText: "Cancelar",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                    if (isConfirm) {
                        $.ajax({
                            url: 'guardardata',
                            type:'POST',
                            data: objPrii,

                            success : function (data){

                                //verPerformance();

                                console.log(data);
                                swal({
                                    title: "Guardado",
                                    text: "Correctamente",
                                    type: "success",
                                    timer: 1000,
                                    showConfirmButton: false
                                });

                            },
                        });

                    }
                    else {
                        swal({
                            title: "CANCELADO",
                            text: "Operación Cancelada",
                            type: "error",
                            timer: 1000,
                            showConfirmButton: false
                        });
                    }
                }
            );


        }

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAxjcCBfqM05-h3icS2P6Ti64bUxUm6btQ&callback=initMap"
            type="text/javascript"></script>


    <script>
        function initMap() {


            var myLatLng = {lat:  -12.0825154, lng:  -76.9683926};

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: myLatLng
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                draggable:true,

            });

            autocomplete = new google.maps.places.Autocomplete(document.getElementById('searchmap'));
            //autocomplete.bindTo('bounds', map);

            google.maps.event.addListener(autocomplete,'place_changed',function () {
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    return;
                }
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(15);
                }
                marker.setPosition(place.geometry.location);
                marker.setVisible(true);

            });


            google.maps.event.addListener(marker,'position_changed',function () {
                var lat = marker.getPosition().lat();
                var lng = marker.getPosition().lng();

                $('#latitud').val(lat);
                $('#longitud').val(lng);

            });







        }





    </script>
@endsection


