<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = [
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1696943114.varicocele_img.png',
                'title' => 'Varicocele',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-varicocele',
                'description' => 'Homeopathic remedies for varicocele offer non-invasive relief from swollen testicular veins',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1626518045.thyroid_icon.png',
                'title' => "Hashimoto's Thyroiditis",
                'link' => 'https://ghoshclinic.com/hashimotos-thyroiditis',
                'description' => "Are you gaining weight? Do you have neck swelling? Click to know more about Hashimoto's Thyroiditis &amp; Best Homeopathic treatment for Hashimoto's Thyroiditis",               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1627630205.1624536313.DD_icon-min.png',
                'title' => 'Epilepsy',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-epilpesy',
                'description' => 'Empowering those with Epilepsy - Treat epilepsy naturally without any side effects. Discover hope and relief with our best Homeopathic treatments for epilepsy',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1627630269.1624536313.DD_icon-min.png',
                'title' => 'Cerebral Palsy',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-cerebral-palsy',
                'description' => 'No neck holding? Nobody controls? Milestones delayed? Read more about cerebral palsy &amp; visit best homeopathic doctor for cerebral palsy near you.',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1627630321.1623746351.Child_icon-min.png',
                'title' => 'Child Diseases',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-children-diseases',
                'description' => 'The child is the future. Try safe homeopathic medicines without any side effects. Read more about Child Diseases.',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1679298844.3.png',
                'title' => 'Urticaria',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-urticaria',
                'description' => 'Suffering from hives? intolerable itching? Read more about Urticaria &amp; Visit Best Homeopathic doctor for Urticaria near you.',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1623600632.Abdomen_Pain.png',
                'title' => 'Wheat Allergy',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-wheat-allergy',
                'description' => 'Cant eat your favorite food? not gaining height and weight? Click here to know more about Wheat Allergy &amp; Best Homeopathic treatment for Wheat Allergy near yo',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1623595278.warts.png',
                'title' => 'Warts',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-warts',
                'description' => 'Skin warts are common but ugly to look at. Make them disappear completely without chemicals. Click here to know more about Warts &amp; Best Homeopathic treatment ',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1623424894.Hypothyroid_icon.png',
                'title' => 'Hyperthyroid',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-hyperthyroid',
                'description' => 'Are you losing weight? It must be Hyperthyroid. Read more about Hyperthyroid &amp; Visit Best Homeopathic doctor for Hyperthyroid near you.',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1620578735.Abdomen_Pain.png',
                'title' => 'Pain in Abdomen',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-pain-in-abdomen',
                'description' => 'Worried about abdomen pain? Click here to know more about Pain in abdomen &amp; Best Homeopathic treatment for Pain in abdomen near you.',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1620577929.Flatulence.png',
                'title' => 'Flatulence',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-flatulence',
                'description' => 'Embarrassed with passing Gas and Flatulence? Cant control? Click here to know more about Flatulence &amp; Best Homeopathic treatment for Flatulence near you.',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1620577511.Epistaxis.png',
                'title' => 'Epistaxis',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-epistaxis',
                'description' => 'How to stop your child\'s nosebleed? Click here to know more about Epistaxis &amp; Best Homeopathic treatment for Epistaxis near you.',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1620576727.Eczema.png',
                'title' => 'Eczema',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-eczema',
                'description' => 'Spending sleepless nights due to itching? No relief with steroids application? Read more about Eczema &amp; Visit Best Homeopathic doctor for Eczema near you.',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1627637853.1620570965.Dysphagia-min.png',
                'title' => 'Dysphagia',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-dysphagia',
                'description' => 'Having swallowing difficulty? Click here to know more about Dysphagia &amp; Best Homeopathic treatment for Dysphagia near you.',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1679299116.6.png',
                'title' => 'Indigestion',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-indigestion',
                'description' => 'Bloated stomach? Gas? Indigestion? Cant enjoy eating tasty food? Click here to know more about Indigestion &amp; Best Homeopathic treatment for Indigestion',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1620802460.Depression.png',
                'title' => 'Depression',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-depression',
                'description' => 'So you want to remain alone and don\'t want to talk to anyone? You might be suffering from Depression. Homeopathy handles depression without any heavy medicine',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1627637825.1620565862.Cough-min.png',
                'title' => 'Cough',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-cough',
                'description' => 'Worried about the nagging cough? spending sleepless nights? Troubled with recurrent cold and cough? Permanent and best homeopathic treatment for cough and cold',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1679298937.5.png',
                'title' => 'Carpal Tunnel Syndrome',
                'link' => 'https://ghoshclinic.com/carpal-tunnel-syndrome',
                'description' => 'Getting wrist pain while working on computers? Don\'t go for surgery. Homeopathic treatment for Carpal Tunnel Syndrome can solve your pain permanently',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1627637768.1620537693.Appendix_treatment-min.png',
                'title' => 'Appendicitis',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-appendicitis',
                'description' => 'Don\'t operate Appendix. Homeopathic treatment for appendicitis can help you avoid surgery.',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1679298899.4.png',
                'title' => 'Rickets',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-rickets',
                'description' => 'If your child is not developing well or he faces difficulty in walking and sometimes may complain of leg pains, don’t ignore. It may be Rickets.Cause, Symptoms and Treatment of Rickets',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1627637734.1619360308.Molluscum_icon-min.png',
                'title' => 'Molluscum contagiosum',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-of-molluscum-contagiosum',
                'description' => 'Avoid burning of Molluscum with chemicals. Instead read success stories of homeopathic treatment of Molluscum Contagiosum. Causes, symptoms and treatment of Molluscum.',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1627637705.1619356949.Hemangioma_Icon-min.png',
                'title' => 'Hemangioma',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-of-hemangioma',
                'description' => 'Cure of Hemangioma without surgery. Hemangioma are scary to see and parents fear they will burst leading to bleeding. Causes, symptoms and treatment of Hemangioma',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1620802936.Atopic-Dermatitis.png',
                'title' => 'Atopic Dermatitis',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-of-atopic-dermatitis',
                'description' => 'Skin Itching is very troublesome, esp when your child is suffering and you watch him itch helplessly. Homeopathic treatment for Atopic Dermatitis relieves your child from suffering',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1627637660.1619336564.Acne_icon-min.png',
                'title' => 'Acne',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-acne',
                'description' => 'Feeling shy due to acne? Want to have healthy skin? Click here to know more about Acne &amp; Best Homeopathic treatment for Acne near you.',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1620803009.Anorexia-Nervosa.png',
                'title' => 'Anorexia Nervosa',
                'link' => 'https://ghoshclinic.com/best-homeopathic-treatment-for-anorexia-nervosa',
                'description' => 'Are you too conscious of your weight? Do you have nausea on eating food? Anorexia Nervosa is a life threatening disease. Find the best homeopathic treatment for anorexia nervosa.',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1628664160.1620803072.Bronchitis-min.png',
                'title' => 'Bronchitis',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-bronchitis',
                'description' => 'Permanent solution for dry, barking, whooping cough. Homeopathy will cure bronchitis from roots giving you a peaceful sleep. Know more about Bronchitis',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1620803150.Tonsilitis.png',
                'title' => 'Tonsillitis',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-tonsillitis',
                'description' => 'Do you have tonsillitis or a sore throat? Want to get rid of Tonsillitis without surgery? Click here to know how to avoid tonsillectomy in your child.',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1679297176.sinusitis.png',
                'title' => 'Sinusitis',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-sinusitis',
                'description' => 'Troubled with Sinus headache? Recurrent running nose and headache? Click here to know more about Sinusitis & Best Homeopathic treatment for Sinusitis near you',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1620803673.Adenoids.png',
                'title' => 'Adenoids',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-adenoids',
                'description' => 'Mouth breathing? Snoring? Don\'t go for Adenoids operation. Click here to know more about Adenoids & Best Homeopathic treatment for Adenoids near you.',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1620803742.Asthma.png',
                'title' => 'Asthma',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-asthma',
                'description' => 'Don’t spend sleepless nights because of recurrent colds and coughs in your child. Homeopathic treatment of Asthma helps your child breathe freely',               "appointment_link" => "/contact2",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                'class' => 'col-lg-3 col-sm-6',
                'icon' => 'upload/service/large/1620803852.Joint-Pains.png',
                'title' => 'Joint Pains',
                'link' => 'https://ghoshclinic.com/homeopathic-treatment-for-joint-pains',
                'description' => 'Worried about joint pains? Using painkillers and ointments? Click here to know more about Joint Pains & Best Homeopathic treatment for Joint Pains near you.',
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"

            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1627637589.1616395818.digestive-min.png",
                "title" => "Acidity",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-for-acidity",
                "description" => "Acidity? Heartburn? Can you enjoy eating tasty food? Click here to learn more about Acidity &amp; Best Homeopathic treatment for Acidity near you.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1627637488.1616395674.cons-min.png",
                "title" => "Constipation",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-for-constipation",
                "description" => "No able to clear bowels every morning? Click here to know more about Constipation &amp; Best Homeopathic treatment for Constipation near you.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1627637628.1616395943.arth-min.png",
                "title" => "Osteoarthritis",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-for-Osteoarthritis",
                "description" => "Worried about joint pains? Using pain killers and ointments? Click here to know more about Osteoarthritis & Best Homeopathic treatment for Osteoarthritis near",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1679299005.7.png",
                "title" => "Cancer",
                "link" => "https://ghoshclinic.com/cancer",
                "description" => "Click here to know more about Cancer & Best Homeopathic treatment for Cancer near you.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1627637400.1616395359.Lifestyle-Disorder-min.png",
                "title" => "Lifestyle Disorder",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-for-lifestyle-disorder",
                "description" => "Weight gain? Stress? Diabetes? Click here to know more about Lifestyle Disorder & Best Homeopathic treatment for Lifestyle Disorder near you.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1627637364.1616395063.Premenstrual-Syndrome-min.png",
                "title" => "Premenstrual Syndrome",
                "link" => "https://ghoshclinic.com/premenstrual-syndrome",
                "description" => "Mood swings? Menstrual pains? Tender breast? Click here to know more about Premenstrual Syndrome (PMS) & Best Homeopathic treatment for PMS near you.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1627637455.1616395401.Menopause-min.png",
                "title" => "Menopause",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-for-menopause",
                "description" => "Hot flashes? Mood changes? Tiredness? Weight gain? Click here to know more about Menopause & Best Homeopathic treatment for Menopause near you.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1616394699.alo.png",
                "title" => "Alopecia Areata",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-for-alopecia-areata",
                "description" => "Hiding hair loss? Feeling Embarrassed? Now Boost your confidence. Click here to know more about Alopecia & Best Homeopathic treatment for Alopecia near you.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1616394583.poor.png",
                "title" => "Poor Weight Gain",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-for-poor-weight-gain",
                "description" => "Are you skinny? You can't gain muscle? Click here to know more about Poor weight gain & Best Homeopathic treatment for Poor weight gain near you.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1616394454.Seborrhoeic-Dermatisis.png",
                "title" => "Seborrheic Dermatitis",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-for-Seborrheic-dermatitis",
                "description" => "Excessive dandruff? Tried all anti Dandruff shampoos? Click here to know more about Seborrheic Dermatitis & Best Homeopathic treatment for Seborrheic Dermatitis near you.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1616394272.mig.png",
                "title" => "Migraine",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-for-migraine",
                "description" => "Tired of taking painkillers for headaches? Click here to know more about Migraine & Best Homeopathic treatment for Migraine near you.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1616394102.service-8.png",
                "title" => "Allergic Rhinitis",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-for-allergic-rhinitis",
                "description" => "Sneezing? Itchy eyes? Click here to know more about Allergic Rhinitis & Best Homeopathic treatment for Allergic Rhinitis near you.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1616394007.kidney.png",
                "title" => "Kidney Stone",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-for-kidney-stone",
                "description" => "Can surgery be avoided for Kidney stone? Click here to know more about Kidney Stone & Best Homeopathic treatment for Kidney Stone near you.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1615898151.service-10.png",
                "title" => "Psoriasis",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-for-psoriasis",
                "description" => "Struggling with Psoriasis? Tried topical and local treatment? Click here to know more about Psoriasis & Best Homeopathic treatment for Psoriasis near you.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1615898151.service-10.png",
                "title" => "Psoriasis",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-for-psoriasis",
                "description" => "Struggling with Psoriasis? Tried topical and local treatment? Click here to know more about Psoriasis & Best Homeopathic treatment for Psoriasis near you.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1628664697.1613715848.service-1-min.png",
                "title" => "Autism",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-for-autism",
                "description" => "Bringing Hope to Autism - Discover Effective and Reversible Homeopathic Treatment for Autism with a 56% success rate. Click here to know more.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1628664383.1613715805.service-2-min.png",
                "title" => "ADHD",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-for-adhd",
                "description" => "Is he naughty? Is he troubling you? Does he disturb class purposely? No!! he is ADHD. Don't get angry. Give him best homeopathic treatment for ADHD.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1628664261.1613715762.service-3-min.png",
                "title" => "Down Syndrome",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-for-down-syndrome",
                "description" => "Is there a cure for down syndrome? Is it a lifelong condition? Click here to know more about Down Syndrome & Best Homeopathic treatment for Down Syndrome near.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1627630577.1624536313.DD_icon-min.png",
                "title" => "Developmental Delay",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-for-developmental-delay",
                "description" => "Has your child missed a milestone? Is he not talking? Click here to know more about Developmental Delay & Best Homeopathic treatment for Developmental Delay near.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1613715651.service-5.png",
                "title" => "Dyslexia",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-for-dyslexia",
                "description" => "Spelling mistake? Reading difficulty? Math difficulty? Click here to know more about Dyslexia & Best Homeopathic treatment for Dyslexia near you.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1613715608.service-6.png",
                "title" => "Thyroid",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-for-thyroid-disease",
                "description" => "Thyroid Problem? Suffer no more!! Heal Your Thyroid Naturally- Safe and Effective Homeopathic Treatment for Thyroid without Hormonal Pills. Click here to know.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment near Dhunela & Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1613715566.service-7.png",
                "title" => "PCOD",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-pcod-pcos",
                "description" => "Reverse your PCOD permanently. Redefining homeopathy treatment for PCOD with a 65% success rate. Safe and effective homeopathic treatment for PCOD near you.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment%20near%20Dhunela%20&%20Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1613715493.service-8.png",
                "title" => "Allergies",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-for-allergies",
                "description" => "Suffering from seasonal weather changes? Click here to know more about Allergies & Best Homeopathic treatment for Allergies near you.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment%20near%20Dhunela%20&%20Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1613715432.service-9.png",
                "title" => "Hairfall",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-for-hair-fall",
                "description" => "Is Hair fall causing you stress? Worried about going bald? Click here to know more about Hair fall & Best Homeopathic treatment for Hair fall near you.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment%20near%20Dhunela%20&%20Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1679299075.8.png",
                "title" => "Skin Allergy",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-for-skin-allergies",
                "description" => "Your skin is the largest organ of your body. It covers and protects your body. This is the first line...",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment%20near%20Dhunela%20&%20Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1613715315.service-11.png",
                "title" => "Hormonal Disorder",
                "link" => "https://ghoshclinic.com/hormonal-disorder",
                "description" => "Weight loss? Hair loss? Irregular periods? Hot flashes? Click here to know about Hormonal Disorder & Best Homeopathic treatment for Hormonal Disorder near you",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment%20near%20Dhunela%20&%20Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ],
            [
                "class" => "col-lg-3 col-sm-6",
                "icon" => "upload/service/large/1613715239.service-12.png",
                "title" => "Short Height",
                "link" => "https://ghoshclinic.com/homeopathic-treatment-for-short-height",
                "description" => "want to grow tall? What is normal growth? Click here to know more about Short Height & Best Homeopathic treatment for Short Height near you.",
                "appointment_link" => "/contact2",
                "treatment_link" => "https://ghoshclinic.com/skin-diseases",
                "whatsapp_link" => "https://api.whatsapp.com/send/?phone=918478019973&text=Hello%20Dr.%20Swati%20Ghosh%20I%27m%20inquiring%20about%20the%20Homeopathy%20Medicine%20for%20my%20treatment%20near%20Dhunela%20&%20Sohna&type=phone_number",
                "address" => "Ghosh Clinic, Homeopathy, Berka Road, Dhunela, Sohna, 8478019973"
            ]
        ];

        $homeopathyTreatments = [
            'Auto-Immune Diseases' => [
                'Psoriasis',
                'Lichen Planus',
                'Herpes Zoster',
                'Thyroid',
                'Goitre'
            ],
            'Respiratory Disorders' => [
                'Chronic Asthma',
                'Breathing Difficulties',
                'Dyspnea',
                'Sinusitis',
                'Rhinitis',
                'Adenoids',
                'Tonsilitis',
                'Post Nasal Drip'
            ],
            'Children Problems' => [
                'Poor Growth Development',
                'Short Height Issues',
                'Delayed Speech',
                'Bedwetting Enuresis',
                'ADHD',
                'Autism',
                'Chronic Constipation',
                'Loss of Appetite'
            ],
            'Skin Problems' => [
                'Allergy',
                'Hives',
                'Eczema Dermatitis',
                'Ringworm',
                'Urticaria',
                'Corn',
                'Viral Warts',
                'Mollescum Contagiosum',
                'Vitiligo',
                'Herpes Zoster'
            ],
            'Digestive/Liver Disorders' => [
                'Constipation',
                'Piles',
                'IBS',
                'GERD Acidity',
                'Gastritis',
                'Kidney Stones',
                'Gall Bladder Stones'
            ],
            'Joint and Neurological Disorders' => [
                'Joint Pain',
                'Arthritis',
                'Cervical',
                'Knee Pain',
                'Backache',
                'Slip Disc',
                'Sciatica',
                'Neurological Disorders',
                'Tremor',
                'Parkinson\'s Disease'
            ],
            'Urinary Disorders' => [
                'UTI',
                'Overactive Bladder',
                'Enlarged Prostate'
            ],
            'Kidney Disorders' => [
                'Nephrotic Syndrome',
                'Kidney Stones',
                'UTI',
                'Polycystic Kidney Disease',
                'Kidney Cysts'
            ],
            'Carcinoma' => [
                'Breast Cancer',
                'Lumps',
                'Prostate',
                'Basal Cell CA',
                'Colon CA',
                'Lung CA',
                'Leukemia',
                'Lymphoma'
            ],
            'Women\'s Health Issues' => [
                'Irregular Menses PCOS',
                'Uterine Fibroid',
                'Endometriosis',
                'Having Trouble Conceiving',
                'PCOD',
                'Pre-mature Eggs',
                'Poor Insulin Resistance',
                'High BP and many more'
            ]
        ];

        $testimonials = [
            [
                'image' => 'img/home-icons/migrane.png',
                'title' => 'Migraine',
                'description' => 'A migraine is a chronic neurological condition wherein people endure severe pain on one half of the head. Homeopathy works deep inside and focuses on the root causes of the problem.',
                'link' => '/homeopathy-migraine-treatment.html',
            ],
            [
                'image' => 'img/home-icons/eczema.png',
                'title' => 'Eczema',
                'description' => 'Eczema is a skin disorder where red, dry and flaky patches appear on the face, neck, upper chest, hands and feet. Constitutional homeopathy treatment helps in controlling it effectively.',
                'link' => '/homeopathy-eczema-treatment.html',
            ],
            [
                'image' => 'img/home-icons/sinus.png',
                'title' => 'Sinus',
                'description' => 'Sinus, also called Sinusitis, is an inflammation or swelling of the tissue lining the sinuses. Homeopathic Treatment will control sinusitis and prevent reoccurrence, frequency, and severity of the attack.',
                'link' => '/sinus-cure.html',
            ],
            [
                'image' => 'img/home-icons/arthritis.png',
                'title' => 'Arthritis',
                'description' => 'Homeopathy treatment for arthritis uses natural remedies that are safe, have no side effects, are non-toxic, and suitable for every individual. It also improves mobility and quality of life.',
                'link' => '/arthritis.html',
            ],
            [
                'image' => 'img/home-icons/uterine-fibroids.png',
                'title' => 'Uterine Fibroids',
                'description' => 'Uterine Fibroids grow in the wall of a woman\'s uterus. Homeopathy is very effective and provides instant relief from pain & discomfort due to fibroids.',
                'link' => '/homeopathy-uterine-fibroids-treatment.html',
            ],
            [
                'image' => 'img/home-icons/knee-pain.png',
                'title' => 'Knee Pain',
                'description' => 'Knee pain is a common complaint that affects people of all ages. Homeopathy enables better absorption of minerals and nutrients essential for bone health by using a holistic approach.',
                'link' => '/knee-pain.html',
            ],
            [
                'image' => 'img/home-icons/infertility.png',
                'title' => 'Infertility',
                'description' => 'Infertility means the inability to conceive even after 12 months of unprotected sex. Homeopathy treatment for infertility stimulates and supports natural conception progressively.',
                'link' => '/infertility.html',
            ],
            [
                'image' => 'img/home-icons/back-pain.png',
                'title' => 'Back Pain',
                'description' => 'Physical discomfort occurring anywhere on the spine or back is referred to as back pain. Homeopathy resolves back pain by controlling the intensity and duration of complaints such as pain and stiffness.',
                'link' => '/back-injuries.html',
            ],
            [
                'image' => 'img/home-icons/piles-icon.png',
                'title' => 'Piles',
                'description' => 'Homeopathy successfully treats piles (both internal and external) without using any invasive procedures. It is very effective, gentle, and provides long-term relief by offering natural remedies for the treatment.',
                'link' => '/homeopathy-piles-treatment.html',
            ],
            [
                'image' => 'img/home-icons/thyroid.png',
                'title' => 'Thyroid',
                'description' => 'Thyroid disorders can be easily controlled by Homeopathic treatments which are right to opt because it will have no side effects and is also a painless procedure to control and get relief.',
                'link' => '/thyroid-treatment.html',
            ],
            [
                'image' => 'img/home-icons/pcos.png',
                'title' => 'PCOS',
                'description' => 'PCOS is a common hormonal disorder seen among women in their reproductive age. Homeopathy is the apt treatment because of the effective control over the women’s hormones.',
                'link' => '/pcos-polycystic-ovarian-syndrome.html',
            ],
            [
                'image' => 'img/home-icons/diabetes.png',
                'title' => 'Diabetes',
                'description' => 'With Diabetes becoming the most common disease in the world, Homeopathy aims to provide all kinds of solutions it deems necessary by providing medications based on the patient’s symptoms to it.',
                'link' => '/diabetes-treatment.html',
            ],
            [
                'image' => 'img/home-icons/kidney-stones.png',
                'title' => 'Kidney Stones',
                'description' => 'Hard deposits of salts and other minerals formed within the kidney or urinary tract are termed as Kidney stones. They first originate in your kidneys and travel down to ureters along the urinary tract.',
                'link' => '/homeopathy-kidneystones-treatment.html',
            ],
            [
                'image' => 'img/home-icons/asthma.png',
                'title' => 'Asthma',
                'description' => 'Asthma is a disease affecting the airways that carry air in and out of your lungs. Homeopathy for Asthma is the most harmless & most reliable method to relive asthma & to treat its complications.',
                'link' => '/asthma-treatment.html',
            ],
            [
                'image' => 'img/home-icons/vitiligo.png',
                'title' => 'Vitiligo',
                'description' => 'Vitiligo is a skin disorder where white patches of skin appear on different parts of the body. Homeopathy treats vitiligo by going down to the root causes & correcting those using natural remedies.',
                'link' => '/homeopathy-vitiligo-treatment.html',
            ],
            [
                'image' => 'img/home-icons/migrane.png',
                'title' => 'Migraine',
                'description' => 'A migraine is a chronic neurological condition wherein people endure severe pain on one half of the head. Homeopathy works deep inside and focuses on the root causes of the problem.',
                'link' => '/homeopathy-migraine-treatment.html',
            ],
            [
                'image' =>'img/home-icons/knee-pain.png',
                'title' => 'Knee Pain',
                'description' => 'Knee pain is a common complaint that affects people of all ages...',
                'link' => '/knee-pain.html'
            ],
            [
                'image' =>'img/home-icons/infertility.png',
                'title' => 'Infertility',
                'description' => 'Infertility means the inability to conceive even after 12 months of unprotected sex...',
                'link' => '/infertility.html'
            ],
            [
                'image' =>'img/home-icons/back-pain.png',
                'title' => 'Back Pain',
                'description' => 'Physical discomfort occurring anywhere on the spine or back is referred to as Back pain...',
                'link' => '/back-injuries.html'
            ],
            [
                'image' =>'img/home-icons/piles-icon.png',
                'title' => 'Piles',
                'description' => 'Homeopathy successfully treats piles (both internal and external) without using any invasive procedures. It is very effective, gentle, and provides long-term relief by offering natural remedies for the treatment.',
                'link' => '/homeopathy-piles-treatment.html',
            ],
            [
                'image' =>'img/home-icons/thyroid.png',
                'title' => 'Thyroid',
                'description' => 'Thyroid disorders can be easily controlled by Homeopathic treatments which are right to opt because it will have no side effects and is also a painless procedure to control and get relief.',
                'link' => '/thyroid-treatment.html',
            ],
            [
                'image' =>'img/home-icons/pcos.png',
                'title' => 'PCOS',
                'description' => 'PCOS is a common hormonal disorder seen among women in their reproductive age. Homeopathy is the apt treatment because of the effective control over the women’s hormones.',
                'link' => '/pcos-polycystic-ovarian-syndrome.html',
            ],
            [
                'image' =>'img/home-icons/diabetes.png',
                'title' => 'Diabetes',
                'description' => 'With Diabetes becoming the most common disease in the world, Homeopathy aims to provide all kinds of solutions it deems necessary by providing medications based on the patient’s symptoms to it.',
                'link' => '/diabetes-treatment.html',
            ],
            [
                'image' =>'img/home-icons/kidney-stones.png',
                'title' => 'Kidney Stones',
                'description' => 'Hard deposits of salts and other minerals formed within the kidney or urinary tract are termed as Kidney stones. They first originate in your kidneys and travel down to ureters along the urinary tract.',
                'link' => '/homeopathy-kidneystones-treatment.html',
            ],
            [
                'image' =>'img/home-icons/asthma.png',
                'title' => 'Asthma',
                'description' => 'Asthma is a disease affecting the airways that carry air in and out of your lungs. Homeopathy for Asthma is the most harmless & most reliable method to relive asthma & to treat its complications.',
                'link' => '/asthma-treatment.html',
            ],
            [
                'image' =>'img/home-icons/vitiligo.png',
                'title' => 'Vitiligo',
                'description' => 'Vitiligo is a skin disorder where white patches of skin appear on different parts of the body. Homeopathy treats vitiligo by going down to the root causes & correcting those using natural remedies.',
                'link' => '/homeopathy-vitiligo-treatment.html',
            ],
            [
                'image' =>'img/home-icons/migrane.png',
                'title' => 'Migraine',
                'description' => 'A migraine is a chronic neurological condition wherein people endure severe pain on one half of the head. Homeopathy works deep inside and focuses on the root causes of the problem.',
                'link' => '/homeopathy-migraine-treatment.html',
            ],
        ];

        return View::make('main.index', [
            'services' => $services,
            'testimonials' => $testimonials,
            'homeopathyTreatments' => $homeopathyTreatments,
        ]);
    }

}
