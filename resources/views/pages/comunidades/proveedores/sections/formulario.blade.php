<section id="formulario" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="form-title">
    <div class="max-w-3xl mx-auto">
        <div class="cta-card slide-card-left p-8 md:p-14 text-center">
            <span class="blueprint-corner" aria-hidden="true"></span>

            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5">
                Solicitar acceso
            </span>

            <h2 id="form-title" class="text-2xl sm:text-3xl md:text-4xl font-extrabold mb-4 text-stell font-heading tracking-tight leading-tight max-w-2xl mx-auto">
                Solicita acceso a la comunidad de Proveedores
            </h2>
            <p id="form-subtitle" class="text-sm md:text-base mb-8 max-w-xl mx-auto text-stell/80 font-sans leading-relaxed">
                Revisaremos tu identidad y relación empresarial antes de otorgar acceso.
            </p>

            <div class="flex justify-center mb-6">
                <x-button href="https://wa.link/swivav" target="_blank" rel="noopener noreferrer" size="xl" data-template-id="form-cta-primary">
                    Acceder gratis
                </x-button>
            </div>

            <!-- Formulario interactivo opcional / embebido -->
            <form id="access-form" class="space-y-6 hidden text-left mt-8 pt-8 border-t border-white/10" novalidate="">
                <!-- Honeypot -->
                <div style="position:absolute;left:-9999px" aria-hidden="true">
                    <input type="text" name="website_url" tabindex="-1" autocomplete="off" id="hp-field">
                </div>

                <div class="mb-6">
                    <div class="flex gap-3 mb-2">
                        <div id="prog-bar-1" class="flex-1 h-2 bg-construction rounded-full"></div>
                        <div id="prog-bar-2" class="flex-1 h-2 bg-white/20 rounded-full"></div>
                    </div>
                    <p id="form-progress-text" class="text-xs font-semibold text-construction uppercase tracking-wider">Paso 1 de 2</p>
                </div>

                <!-- STEP 1 -->
                <div id="form-step-1">
                    <div class="space-y-4">
                        <div>
                            <label data-template-id="form-label-intent" for="f-intent" class="block text-sm font-medium mb-1 text-white">¿Cómo deseas participar? *</label>
                            <select id="f-intent" name="selected_intent" required="" class="w-full bg-white border border-concrete rounded-lg px-4 py-3 text-steel focus:border-construction focus:outline-none">
                                <option value="">Seleccionar...</option>
                                <option value="empresa_busca_proveedores">Soy una empresa y necesito cotizar</option>
                                <option value="proveedor_busca_oportunidades">Soy proveedor o subcontratista</option>
                            </select>
                            <p id="err-intent" class="error-msg hidden text-xs text-red-400 mt-1" role="alert"></p>
                        </div>
                        <div>
                            <label data-template-id="form-label-name" for="f-name" class="block text-sm font-medium mb-1 text-white">Nombre completo *</label>
                            <input id="f-name" type="text" name="full_name" autocomplete="name" required="" minlength="3" class="w-full bg-white border border-concrete rounded-lg px-4 py-3 text-steel placeholder-gray-400 focus:border-construction focus:outline-none" placeholder="Nombres y apellidos">
                            <p id="err-name" class="error-msg hidden text-xs text-red-400 mt-1" role="alert"></p>
                        </div>
                        <div>
                            <label data-template-id="form-label-company" for="f-company" class="block text-sm font-medium mb-1 text-white">Razón social *</label>
                            <input id="f-company" type="text" name="company" required="" minlength="2" class="w-full bg-white border border-concrete rounded-lg px-4 py-3 text-steel placeholder-gray-400 focus:border-construction focus:outline-none" placeholder="Razón social">
                            <p id="err-company" class="error-msg hidden text-xs text-red-400 mt-1" role="alert"></p>
                        </div>
                        <div>
                            <label data-template-id="form-label-ruc" for="f-ruc" class="block text-sm font-medium mb-1 text-white">RUC *</label>
                            <input id="f-ruc" type="text" name="ruc" required="" minlength="11" maxlength="11" inputmode="numeric" class="w-full bg-white border border-concrete rounded-lg px-4 py-3 text-steel placeholder-gray-400 focus:border-construction focus:outline-none" placeholder="20XXXXXXXXX">
                            <p id="err-ruc" class="error-msg hidden text-xs text-red-400 mt-1" role="alert"></p>
                        </div>
                        <div>
                            <label data-template-id="form-label-role" for="f-role" class="block text-sm font-medium mb-1 text-white">Cargo del representante *</label>
                            <input id="f-role" type="text" name="role" required="" minlength="2" class="w-full bg-white border border-concrete rounded-lg px-4 py-3 text-steel placeholder-gray-400 focus:border-construction focus:outline-none" placeholder="Gerente, administrador, representante...">
                            <p id="err-role" class="error-msg hidden text-xs text-red-400 mt-1" role="alert"></p>
                        </div>
                        <div>
                            <label data-template-id="form-label-city" for="f-city" class="block text-sm font-medium mb-1 text-white">Ciudad o región principal *</label>
                            <input id="f-city" type="text" name="city" required="" minlength="2" class="w-full bg-white border border-concrete rounded-lg px-4 py-3 text-steel placeholder-gray-400 focus:border-construction focus:outline-none" placeholder="Lima, Arequipa, Cusco...">
                            <p id="err-city" class="error-msg hidden text-xs text-red-400 mt-1" role="alert"></p>
                        </div>
                    </div>
                    <x-button type="button" id="form-next-btn" fullWidth class="mt-8">
                        Continuar
                    </x-button>
                </div>

                <!-- STEP 2 -->
                <div id="form-step-2" class="hidden">
                    <div class="space-y-4">
                        <div>
                            <label data-template-id="form-label-whatsapp" for="f-whatsapp" class="block text-sm font-medium mb-1 text-white">WhatsApp *</label>
                            <input id="f-whatsapp" type="tel" name="whatsapp" autocomplete="tel" inputmode="tel" required="" class="w-full bg-white border border-concrete rounded-lg px-4 py-3 text-steel placeholder-gray-400 focus:border-construction focus:outline-none" placeholder="+51 999 999 999">
                            <p id="err-whatsapp" class="error-msg hidden text-xs text-red-400 mt-1" role="alert"></p>
                        </div>
                        <div>
                            <label data-template-id="form-label-email" for="f-email" class="block text-sm font-medium mb-1 text-white">Correo electrónico *</label>
                            <input id="f-email" type="email" name="email" autocomplete="email" required="" class="w-full bg-white border border-concrete rounded-lg px-4 py-3 text-steel placeholder-gray-400 focus:border-construction focus:outline-none" placeholder="tu@empresa.com">
                            <p id="err-email" class="error-msg hidden text-xs text-red-400 mt-1" role="alert"></p>
                        </div>
                        <div>
                            <label data-template-id="form-label-url" for="f-company-url" class="block text-sm font-medium mb-1 text-white">Web, LinkedIn, catálogo o perfil público (opcional)</label>
                            <input id="f-company-url" type="url" name="company_url" class="w-full bg-white border border-concrete rounded-lg px-4 py-3 text-steel placeholder-gray-400 focus:border-construction focus:outline-none" placeholder="https://tu-empresa.com (opcional)">
                        </div>

                        <!-- Conditional: empresa -->
                        <div id="fields-empresa" class="hidden space-y-4">
                            <div>
                                <label for="f-request-type" class="block text-sm font-medium mb-1 text-white">Tipo de requerimiento *</label>
                                <select id="f-request-type" class="w-full bg-white border border-concrete rounded-lg px-4 py-3 text-steel focus:border-construction focus:outline-none">
                                    <option value="">Seleccionar...</option>
                                    <option value="materiales">Materiales</option>
                                    <option value="servicios">Servicios</option>
                                    <option value="subcontrato">Subcontrato</option>
                                    <option value="alquiler">Alquiler de equipos</option>
                                    <option value="transporte">Transporte/logística</option>
                                    <option value="otro">Otro</option>
                                </select>
                                <p id="err-request-type" class="error-msg hidden text-xs text-red-400 mt-1" role="alert"></p>
                            </div>
                            <div>
                                <label for="f-project-location" class="block text-sm font-medium mb-1 text-white">Ubicación del proyecto *</label>
                                <input id="f-project-location" type="text" class="w-full bg-white border border-concrete rounded-lg px-4 py-3 text-steel placeholder-gray-400 focus:border-construction focus:outline-none" placeholder="Ciudad o región del proyecto">
                                <p id="err-project-location" class="error-msg hidden text-xs text-red-400 mt-1" role="alert"></p>
                            </div>
                            <div>
                                <label for="f-quote-deadline" class="block text-sm font-medium mb-1 text-white">Fecha límite para cotizar (opcional)</label>
                                <input id="f-quote-deadline" type="date" class="w-full bg-white border border-concrete rounded-lg px-4 py-3 text-steel focus:border-construction focus:outline-none">
                            </div>
                        </div>

                        <!-- Conditional: proveedor -->
                        <div id="fields-proveedor" class="hidden space-y-4">
                            <div>
                                <label for="f-supplier-category" class="block text-sm font-medium mb-1 text-white">Categoría principal *</label>
                                <select id="f-supplier-category" class="w-full bg-white border border-concrete rounded-lg px-4 py-3 text-steel focus:border-construction focus:outline-none">
                                    <option value="">Seleccionar...</option>
                                    <option value="materiales">Materiales/bienes</option>
                                    <option value="servicios">Servicios</option>
                                    <option value="subcontratos">Subcontratos</option>
                                    <option value="alquiler">Alquiler de equipos</option>
                                    <option value="transporte">Transporte/logística</option>
                                    <option value="otro">Otro</option>
                                </select>
                                <p id="err-supplier-category" class="error-msg hidden text-xs text-red-400 mt-1" role="alert"></p>
                            </div>
                            <div>
                                <label for="f-supplier-offering" class="block text-sm font-medium mb-1 text-white">Productos, servicios o especialidades *</label>
                                <input id="f-supplier-offering" type="text" class="w-full bg-white border border-concrete rounded-lg px-4 py-3 text-steel placeholder-gray-400 focus:border-construction focus:outline-none" placeholder="Describe tu oferta principal">
                                <p id="err-supplier-offering" class="error-msg hidden text-xs text-red-400 mt-1" role="alert"></p>
                            </div>
                            <div>
                                <label for="f-coverage-regions" class="block text-sm font-medium mb-1 text-white">Regiones que atiende *</label>
                                <input id="f-coverage-regions" type="text" class="w-full bg-white border border-concrete rounded-lg px-4 py-3 text-steel placeholder-gray-400 focus:border-construction focus:outline-none" placeholder="Lima, Arequipa, Nacional...">
                                <p id="err-coverage-regions" class="error-msg hidden text-xs text-red-400 mt-1" role="alert"></p>
                            </div>
                            <div>
                                <label for="f-handles-bids" class="block text-sm font-medium mb-1 text-white">¿Atiende cotizaciones para licitaciones? *</label>
                                <select id="f-handles-bids" class="w-full bg-white border border-concrete rounded-lg px-4 py-3 text-steel focus:border-construction focus:outline-none">
                                    <option value="">Seleccionar...</option>
                                    <option value="si">Sí</option>
                                    <option value="no">No</option>
                                    <option value="depende">Depende del requerimiento</option>
                                </select>
                                <p id="err-handles-bids" class="error-msg hidden text-xs text-red-400 mt-1" role="alert"></p>
                            </div>
                        </div>

                        <div>
                            <label data-template-id="form-label-desc" for="f-desc" class="block text-sm font-medium mb-1 text-white">Descripción breve (opcional)</label>
                            <textarea id="f-desc" name="need_description" rows="3" maxlength="500" class="w-full bg-white border border-concrete rounded-lg px-4 py-3 text-steel placeholder-gray-400 focus:border-construction focus:outline-none resize-none" placeholder="Describe brevemente tu necesidad u oferta (opcional)"></textarea>
                        </div>

                        <div class="flex items-start gap-3">
                            <input id="f-consent" type="checkbox" required="" class="mt-1 w-4 h-4 accent-construction">
                            <label for="f-consent" class="text-xs text-white/80 leading-relaxed">
                                Autorizo el uso de mis datos para evaluar mi solicitud, verificar mi identidad empresarial y comunicarme sobre oportunidades o requerimientos relacionados con la comunidad.
                            </label>
                        </div>
                        <p id="err-consent" class="error-msg hidden text-xs text-red-400" role="alert"></p>
                    </div>

                    <div class="flex gap-3 mt-6">
                        <x-button type="button" id="form-back-btn" variant="dark" class="flex-1">
                            Atrás
                        </x-button>
                        <x-button type="submit" id="form-submit-btn" data-template-id="form-submit" class="flex-1">
                            Enviar solicitud
                        </x-button>
                    </div>
                </div>

                <p data-template-id="form-footer-note" class="text-xs text-center text-white/60 mt-4">
                    Acceso gratuito · Solicitud sujeta a validación de identidad y perfil empresarial
                </p>
            </form>

            <div id="form-success" role="status" aria-live="polite" class="hidden text-center py-12">
                <div class="w-16 h-16 rounded-full bg-green-500/10 flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="check-circle" class="w-8 h-8 text-green-500"></i>
                </div>
                <h3 data-template-id="form-success-title" class="font-heading text-xl font-bold mb-2 text-white">¡Solicitud recibida!</h3>
                <p data-template-id="form-success-desc" class="text-sm text-white/80">Revisaremos tu información y podremos contactarte por WhatsApp para completar la validación. Si tu perfil es aprobado, te enviaremos las instrucciones de acceso.</p>
            </div>

            <div id="form-error" role="alert" aria-live="assertive" class="hidden text-center py-4">
                <p class="text-red-400 text-sm mb-3">No pudimos guardar tu solicitud. Puedes enviarnos tus datos por WhatsApp.</p>
                <x-button id="form-whatsapp-fallback" href="https://wa.me/51935447658" target="_blank" rel="noopener noreferrer" class="bg-green-600 hover:bg-green-500 text-steel">
                    Enviar datos por WhatsApp
                </x-button>
            </div>
        </div>
    </div>
</section>
