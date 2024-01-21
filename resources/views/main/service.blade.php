@extends('main.layout.mainlayout')

@section('title', 'Our Services')

@section('styles')
<link href="{{ asset('css/serv/adminserv.css') }}" rel="stylesheet">
<link href="{{ asset('css/serv/service.css') }}" rel="stylesheet">
@endsection

@section('js')

@endsection

@section('content')


<div class="services">
    @if(!auth::guest())
    @if(auth::user()->type=="admin")
    <a class="btn btn-primary" href="/ServiceTest/create">
        Add new services
    </a>
    @endif
    @endif
    <h1>Our Services</h1>
</div>

<section class="services-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h1>Homeopathic Treatment</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-varicocele"> <img src="upload/service/large/1696943114.varicocele_img.png" alt="varicocele icon"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-varicocele">Varicocele </a>
                        </h3>
                        <p style="font-size:14px;">Homeopathic remedies for varicocele offer non-invasive relief from swollen testicular veins</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//hashimotos-thyroiditis"> <img src="upload/service/large/1626518045.thyroid_icon.png" alt="hashimotos thyroiditis icon"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//hashimotos-thyroiditis">Hashimoto's Thyroiditis</a>
                        </h3>
                        <p style="font-size:14px;">Are you gaining weight? Do you have neck swelling? Click to know more about Hashimoto's Thyroiditis &amp; Best Homeopathic treatment for Hashimoto's Thyroiditis</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-epilpesy"> <img src="upload/service/large/1627630205.1624536313.DD_icon-min.png" alt="The best Homeopathy Treatment for Epilepsy"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-epilpesy">Epilepsy</a>
                        </h3>
                        <p style="font-size:14px;">Empowering those with Epilepsy - Treat epilepsy naturally without any side effects. Discover hope and relief with our best Homeopathic treatments for epilepsy</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-cerebral-palsy"> <img src="upload/service/large/1627630269.1624536313.DD_icon-min.png" alt="cerebral palsy"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-cerebral-palsy">Cerebral Palsy</a>
                        </h3>
                        <p style="font-size:14px;">No neck holding? Nobody controls? Milestones delayed? Read more about cerebral palsy &amp; visit best homeopathic doctor for cerebral palsy near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-children-diseases"> <img src="upload/service/large/1627630321.1623746351.Child_icon-min.png" alt="The best Homeopathy Treatment for Child"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-children-diseases">Child Diseases</a>
                        </h3>
                        <p style="font-size:14px;">The child is the future. Try safe homeopathic medicines without any side effects. Read more about Child Diseases.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-urticaria"> <img src="upload/service/large/1679298844.3.png" alt="urticaria homeopathic treatment"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-urticaria">Urticaria</a>
                        </h3>
                        <p style="font-size:14px;">Suffering from hives? intolerable itching? Read more about Urticaria &amp; Visit Best Homeopathic doctor for Urticaria near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-wheat-allergy"> <img src="upload/service/large/1623600632.Abdomen_Pain.png" alt=""></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-wheat-allergy">Wheat Allergy</a>
                        </h3>
                        <p style="font-size:14px;">Cant eat your favorite food? not gaining height and weight? Click here to know more about Wheat Allergy &amp; Best Homeopathic treatment for Wheat Allergy near yo</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-warts"> <img src="upload/service/large/1623595278.warts.png" alt="Homeopathic treatment for warts"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-warts">Warts</a>
                        </h3>
                        <p style="font-size:14px;">Skin warts are common but ugly to look at. Make them disappear completely without chemicals. Click here to know more about Warts &amp; Best Homeopathic treatment </p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-hyperthyroid"> <img src="upload/service/large/1623424894.Hypothyroid_icon.png" alt="hyperthyroid icon"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-hyperthyroid">Hyperthyroid</a>
                        </h3>
                        <p style="font-size:14px;">Are you losing weight? It must be Hyperthyroid. Read more about Hyperthyroid &amp; Visit Best Homeopathic doctor for Hyperthyroid near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-hypothyroid"> <img src="upload/service/large/1623424693.Hypothyroid_icon.png" alt="hypothyroid icon"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-hypothyroid">Hypothyroid</a>
                        </h3>
                        <p style="font-size:14px;">Feeling lethargy, No desire to work? weight gain? Click here to know more about Hypothyroid &amp; Best Homeopathic treatment for Hypothyroid near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-pain-in-abdomen"> <img src="upload/service/large/1620578735.Abdomen_Pain.png" alt="Pain in abdomen Icon"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-pain-in-abdomen">Pain in Abdomen</a>
                        </h3>
                        <p style="font-size:14px;">Worried about abdomen pain? Click here to know more about Pain in abdomen &amp; Best Homeopathic treatment for Pain in abdomen near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-flatulence"> <img src="upload/service/large/1620577929.Flatulence.png" alt="flatulence icon"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-flatulence">Flatulence</a>
                        </h3>
                        <p style="font-size:14px;">Embarrassed with passing Gas and Flatulence? Cant control? Click here to know more about Flatulence &amp; Best Homeopathic treatment for Flatulence near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-epistaxis"> <img src="upload/service/large/1620577511.Epistaxis.png" alt="Homeopathy for Epistaxis"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-epistaxis">Epistaxis</a>
                        </h3>
                        <p style="font-size:14px;">How to stop your child's nosebleed? Click here to know more about Epistaxis &amp; Best Homeopathic treatment for Epistaxis near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-eczema"> <img src="upload/service/large/1620576727.Eczema.png" alt="homeopathy treatment for eczema"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-eczema">Eczema</a>
                        </h3>
                        <p style="font-size:14px;">Spending sleepless nights due to itching? No relief with steroids application? Read more about Eczema &amp; Visit Best Homeopathic doctor for Eczema near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-dysphagia"> <img src="upload/service/large/1627637853.1620570965.Dysphagia-min.png" alt=""></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-dysphagia">Dysphagia</a>
                        </h3>
                        <p style="font-size:14px;">Having swallowing difficulty? Click here to know more about Dysphagia &amp; Best Homeopathic treatment for Dysphagia near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-indigestion"> <img src="upload/service/large/1679299116.6.png" alt=""></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-indigestion">Indigestion</a>
                        </h3>
                        <p style="font-size:14px;">Bloated stomach? Gas? Indigestion? Cant enjoy eating tasty food? Click here to know more about Indigestion &amp; Best Homeopathic treatment for Indigestion</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-depression"> <img src="upload/service/large/1620802460.Depression.png" alt=""></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-depression">Depression</a>
                        </h3>
                        <p style="font-size:14px;">So you want to remain alone and don't want to talk to anyone? You might be suffering from Depression. Homeopathy handles depression without any heavy medicine</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-cough"> <img src="upload/service/large/1627637825.1620565862.Cough-min.png" alt="cough icon"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-cough">Cough</a>
                        </h3>
                        <p style="font-size:14px;">Worried about the nagging cough? spending sleepless nights? Troubled with recurrent cold and cough? Permanent and best homeopathic treatment for cough and cold</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//carpal-tunnel-syndrome"> <img src="upload/service/large/1679298937.5.png" alt="carpel tunnel syndrome icon"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//carpal-tunnel-syndrome">Carpal Tunnel Syndrome</a>
                        </h3>
                        <p style="font-size:14px;">Getting wrist pain while working on computers? Don't go for surgery. Homeopathic treatment for Carpal Tunnel Syndrome can solve your pain permanently</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-appendicitis"> <img src="upload/service/large/1627637768.1620537693.Appendix_treatment-min.png" alt=""></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-appendicitis">Appendicitis</a>
                        </h3>
                        <p style="font-size:14px;">Don't operate Appendix. Homeopathic treatment for appendicitis can help you avoid surgery. </p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-rickets"> <img src="upload/service/large/1679298899.4.png" alt=""></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-rickets">Rickets</a>
                        </h3>
                        <p style="font-size:14px;">If your child is not developing well or he faces difficulty in walking and sometimes may complain of leg pains, don’t ignore. It may be Rickets.Cause, Symptoms and Treatment of Rickets</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-of-molluscum-contagiosum"> <img src="upload/service/large/1627637734.1619360308.Molluscum_icon-min.png" alt="molluscum contagiosum icon"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-of-molluscum-contagiosum">Molluscum contagiosum</a>
                        </h3>
                        <p style="font-size:14px;">Avoid burning of Molluscum with chemicals. Instead read success stories of homeopathic treatment of Molluscum Contagiosum. Causes, symptoms and treatment of Molluscum.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-of-hemangioma"> <img src="upload/service/large/1627637705.1619356949.Hemangioma_Icon-min.png" alt="hemangioma icon"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-of-hemangioma">Hemangioma</a>
                        </h3>
                        <p style="font-size:14px;">Cure of Hemangioma without surgery. Hemangioma are scary to see and parents fear they will burst leading to bleeding. Causes, symptoms and treatment of Hemangioma</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-of-atopic-dermatitis"> <img src="upload/service/large/1620802936.Atopic-Dermatitis.png" alt=""></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-of-atopic-dermatitis">Atopic Dermatitis</a>
                        </h3>
                        <p style="font-size:14px;">Skin Itching is very troublesome, esp when your child is suffering and you watch him itch helplessly. Homeopathic treatment for Atopic Dermatitis relieves your child from suffering</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-acne"> <img src="upload/service/large/1627637660.1619336564.Acne_icon-min.png" alt="acne icon"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-acne">Acne</a>
                        </h3>
                        <p style="font-size:14px;">Feeling shy due to acne? Want to have healthy skin? Click here to know more about Acne &amp; Best Homeopathic treatment for Acne near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//best-homeopathic-treatment-for-anorexia-nervosa"> <img src="upload/service/large/1620803009.Anorexia-Nervosa.png" alt=""></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//best-homeopathic-treatment-for-anorexia-nervosa">Anorexia Nervosa</a>
                        </h3>
                        <p style="font-size:14px;">Are you too conscious of your weight? Do you have nausea on eating food? Anorexia Nervosa is a life threatening disease. Find the best homeopathic treatment for anorexia nervosa.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-bronchitis"> <img src="upload/service/large/1628664160.1620803072.Bronchitis-min.png" alt="The best Homeopathy Treatment for Bronchitis "></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-bronchitis">Bronchitis</a>
                        </h3>
                        <p style="font-size:14px;">Permanent solution for dry, barking, whooping cough. Homeopathy will cure bronchitis from roots giving you a peaceful sleep. Know more about Bronchitis</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-tonsillitis"> <img src="upload/service/large/1620803150.Tonsilitis.png" alt="Homeopathic treatment for Tonsillitis"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-tonsillitis">Tonsillitis</a>
                        </h3>
                        <p style="font-size:14px;">Do you have tonsillitis or a sore throat? Want to get rid of Tonsillitis without surgery? Click here to know how to avoid tonsillectomy in your child.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-sinusitis"> <img src="upload/service/large/1679297176.sinusitis.png" alt="Homoeopathic Treatment for Sinusitis "></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-sinusitis">Sinusitis</a>
                        </h3>
                        <p style="font-size:14px;">Troubled with Sinus headache? Recurrent running nose and headache? Click here to know more about Sinusitis &amp; Best Homeopathic treatment for Sinusitis near you</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-adenoids"> <img src="upload/service/large/1620803673.Adenoids.png" alt="adenoids icon"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-adenoids">Adenoids</a>
                        </h3>
                        <p style="font-size:14px;">Mouth breathing? Snoring? Don't go for Adenoids operation. Click here to know more about Adenoids &amp; Best Homeopathic treatment for Adenoids near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-asthma"> <img src="upload/service/large/1620803742.Asthma.png" alt="homeopathic treatment for asthma"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-asthma">Asthma</a>
                        </h3>
                        <p style="font-size:14px;">Don’t spend sleepless nights because of recurrent colds and coughs in your child. Homeopathic treatment of Asthma helps your child breathe freely</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-joint-pains"> <img src="upload/service/large/1620803852.Joint-Pains.png" alt="Joint Pains icon"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-joint-pains">Joint Pains</a>
                        </h3>
                        <p style="font-size:14px;">Worried about joint pains? Using painkillers and ointments? Click here to know more about Joint Pains &amp; Best Homeopathic treatment for Joint Pains near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-Osteoarthritis"> <img src="upload/service/large/1627637628.1616395943.arth-min.png" alt=""></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-Osteoarthritis">Osteoarthritis</a>
                        </h3>
                        <p style="font-size:14px;">Worried about joint pains? Using pain killers and ointments? Click here to know more about Osteoarthritis &amp; Best Homeopathic treatment for Osteoarthritis near</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-acidity"> <img src="upload/service/large/1627637589.1616395818.digestive-min.png" alt="Acidity icon"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-acidity">Acidity</a>
                        </h3>
                        <p style="font-size:14px;">Acidity? Heartburn? Can you enjoy eating tasty food? Click here to learn more about Acidity &amp; Best Homeopathic treatment for Acidity near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-constipation"> <img src="upload/service/large/1627637488.1616395674.cons-min.png" alt=""></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-constipation">Constipation</a>
                        </h3>
                        <p style="font-size:14px;">No able to clear bowels every morning? Click here to know more about Constipation &amp; Best Homeopathic treatment for Constipation near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//cancer"> <img src="upload/service/large/1679299005.7.png" alt=""></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//cancer">Cancer</a>
                        </h3>
                        <p style="font-size:14px;">Click here to know more about Cancer &amp; Best Homeopathic treatment for Cancer near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-lifestyle-disorder"> <img src="upload/service/large/1627637400.1616395359.Lifestyle-Disorder-min.png" alt="Homoeopathic Treatment for Lifestyle Disorder"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-lifestyle-disorder">Lifestyle Disorder</a>
                        </h3>
                        <p style="font-size:14px;">Weight gain? Stress? Diabetes? Click here to know more about Lifestyle Disorder &amp; Best Homeopathic treatment for Lifestyle Disorder near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//premenstrual-syndrome"> <img src="upload/service/large/1627637364.1616395063.Premenstrual-Syndrome-min.png" alt=""></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//premenstrual-syndrome">Premenstrual Syndrome</a>
                        </h3>
                        <p style="font-size:14px;">Mood swings? Menstrual pains? Tender breast? Click here to know more about Premenstrual Syndrome (PMS) &amp; Best Homeopathic treatment for PMS near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-menopause"> <img src="upload/service/large/1627637455.1616395401.Menopause-min.png" alt=""></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-menopause">Menopause</a>
                        </h3>
                        <p style="font-size:14px;">Hot flashes? Mood changes? Tiredness? Weight gain? Click here to know more about Menopause &amp; Best Homeopathic treatment for Menopause near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-alopecia-areata"> <img src="upload/service/large/1616394699.alo.png" alt="Homeopathic treatment for alopecia"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-alopecia-areata">Alopecia Areata</a>
                        </h3>
                        <p style="font-size:14px;">Hiding hair loss? Feeling Embarrassed? Now Boost your confidence. Click here to know more about Alopecia &amp; Best Homeopathic treatment for Alopecia near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-poor-weight-gain"> <img src="upload/service/large/1616394583.poor.png" alt=""></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-poor-weight-gain">Poor Weight Gain</a>
                        </h3>
                        <p style="font-size:14px;">Are you skinny? You can't gain muscle? Click here to know more about Poor weight gain &amp; Best Homeopathic treatment for Poor weight gain near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-Seborrheic-dermatitis"> <img src="upload/service/large/1616394454.Seborrhoeic-Dermatisis.png" alt="seborrheic dermatitis icon"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-Seborrheic-dermatitis">Seborrheic Dermatitis</a>
                        </h3>
                        <p style="font-size:14px;">Excessive dandruff? Tried all anti Dandruff shampoos? Click here to know more about Seborrheic Dermatitis &amp; Best Homeopathic treatment for Seborrheic Dermatit</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-migraine"> <img src="upload/service/large/1616394272.mig.png" alt="Treatment for Migraine"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-migraine">Migraine</a>
                        </h3>
                        <p style="font-size:14px;">Tired of taking painkillers for headaches? Click here to know more about Migraine &amp; Best Homeopathic treatment for Migraine near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-allergic-rhinitis"> <img src="upload/service/large/1616394102.service-8.png" alt=""></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-allergic-rhinitis">Allergic Rhinitis</a>
                        </h3>
                        <p style="font-size:14px;">Sneezing? Itchy eyes? Click here to know more about Allergic Rhinitis &amp; Best Homeopathic treatment for Allergic Rhinitis near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-kidney-stone"> <img src="upload/service/large/1616394007.kidney.png" alt=""></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-kidney-stone">Kidney Stone</a>
                        </h3>
                        <p style="font-size:14px;">Can surgery be avoided for Kidney stone? Click here to know more about Kidney Stone &amp; Best Homeopathic treatment for Kidney Stone near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-psoriasis"> <img src="upload/service/large/1615898151.service-10.png" alt=""></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-psoriasis">Psoriasis</a>
                        </h3>
                        <p style="font-size:14px;">Struggling with Psoriasis? Tried topical and local treatment? Click here to know more about Psoriasis &amp; Best Homeopathic treatment for Psoriasis near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-autism"> <img src="upload/service/large/1628664697.1613715848.service-1-min.png" alt="Best Homeopathic Medicine for Autism "></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-autism">Autism</a>
                        </h3>
                        <p style="font-size:14px;">Bringing Hope to Autism - Discover Effective and Reversible Homeopathic Treatment for Autism with a 56% success rate. Click here to know more.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-adhd"> <img src="upload/service/large/1628664383.1613715805.service-2-min.png" alt="The best Homeopathic Treatment for ADHD "></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-adhd">ADHD</a>
                        </h3>
                        <p style="font-size:14px;">Is he naughty? Is he troubling you? Does he disturb class purposely? No!! he is ADHD. Don't get angry. Give him best homeopathic treatment for ADHD</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-down-syndrome"> <img src="upload/service/large/1628664261.1613715762.service-3-min.png" alt="The best Homeopathic Treatment for Down Syndrome "></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-down-syndrome">Down Syndrome</a>
                        </h3>
                        <p style="font-size:14px;">Is there a cure for down syndrome? Is it a lifelong condition? Click here to know more about Down Syndrome &amp; Best Homeopathic treatment for Down Syndrome near</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-developmental-delay"> <img src="upload/service/large/1627630577.1624536313.DD_icon-min.png" alt="developmental delay icon"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-developmental-delay">Developmental Delay</a>
                        </h3>
                        <p style="font-size:14px;">Has your child missed a milestone? Is he not talking? Click here to know more about Developmental Delay &amp; Best Homeopathic treatment for Developmental Delay near</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-dyslexia"> <img src="upload/service/large/1613715651.service-5.png" alt="Homoeopathic Treatment for dyslexia"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-dyslexia">Dyslexia</a>
                        </h3>
                        <p style="font-size:14px;">Spelling mistake? Reading difficulty? Math difficulty? Click here to know more about Dyslexia &amp; Best Homeopathic treatment for Dyslexia near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-thyroid-disease"> <img src="upload/service/large/1613715608.service-6.png" alt="Thyroid icon"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-thyroid-disease">Thyroid</a>
                        </h3>
                        <p style="font-size:14px;">Thyroid Problem? Suffer no more!! Heal Your Thyroid Naturally- Safe and Effective Homeopathic Treatment for Thyroid without Hormonal Pills. Click here to know</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-pcod-pcos"> <img src="upload/service/large/1613715566.service-7.png" alt="PCOD icon"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-pcod-pcos">PCOD</a>
                        </h3>
                        <p style="font-size:14px;">Reverse your PCOD permanently. Redefining homeopathy treatment for PCOD with 65% success rate. Safe and effective homeopathic treatment for PCOD near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-allergies"> <img src="upload/service/large/1613715493.service-8.png" alt=""></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-allergies">Allergies</a>
                        </h3>
                        <p style="font-size:14px;">Suffering from seasonal weather changes? Click here to know more about Allergies &amp; Best Homeopathic treatment for Allergies near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-hair-fall"> <img src="upload/service/large/1613715432.service-9.png" alt="Hair fall icon"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-hair-fall">Hairfall</a>
                        </h3>
                        <p style="font-size:14px;">Is Hair fall causing you stress? Worried about going bald? Click here to know more about Hair fall &amp; Best Homeopathic treatment for Hair fall near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-skin-allergies"> <img src="upload/service/large/1679299075.8.png" alt="skin allergy icon"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-skin-allergies">Skin allergy</a>
                        </h3>
                        <p style="font-size:14px;">Your skin is the largest organ of your body. It covers and protects your body. This is the first line ...</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//hormonal-disorder"> <img src="upload/service/large/1613715315.service-11.png" alt=""></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//hormonal-disorder">Hormonal Disorder</a>
                        </h3>
                        <p style="font-size:14px;">Weight loss? Hair loss? Irregular periods? Hot flashes? Click here to know about Hormonal Disorder &amp; Best Homeopathic treatment for Hormonal Disorder near you</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services" style="box-shadow: 0 0 3px 3px #E0E0E0;">
                    <div class="services-icon">
                        <a href="https://ghoshclinic.com//homeopathic-treatment-for-short-height"> <img src="upload/service/large/1613715239.service-12.png" alt="short height icon"></a>
                    </div>
                    <div class="service-content" style="">
                        <h3>
                            <a href="https://ghoshclinic.com//homeopathic-treatment-for-short-height">Short Height</a>
                        </h3>
                        <p style="font-size:14px;">want to grow tall? What is normal growth? Click here to know more about Short Height &amp; Best Homeopathic treatment for Short Height near you.</p>
                    </div>
                    <div class="serv1-btn">
                        <a href="/contact2" title="Book Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a><a href="https://ghoshclinic.com/skin-diseases" target="_blank" title="Start Treatment"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="services-shape">
        <img src="https://www.homoeocare.co.in/site/views/assets/img/services-shape.png" alt="Image">
    </div>
</section>

<div class="services">
    <div class="container">
        @if (count($posts)>0)
        @foreach ($posts as $post)
        <div class="service left col-lg-6 col-md-12 col-sm-12 p-5">
            <img src="/storage/images/{{$post->image}}">
            <h2 class="text-center">{{ $post->title }}</h2>
            <p>{{ $post->description }}</p>
            @if(!auth::guest())
            @if(auth::user()->id == $post->user_id)
            <a class="btn btn-primary" href="/ServiceTest/{{ $post->id }}/edit">Edit</a>
            <form class="form" action="/ServiceTest/{{ $post->id }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input type="submit" class="btn btn-danger" value="Remove">
            </form>
            @endif
            @endif
        </div>
        @endforeach
        @else
        <p>No posts to show</p>
        @endif
    </div>


</div>

@endsection