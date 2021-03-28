<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2>{{$contactFormTitle[0]->title}}</h2>
                </div>
                <p>{{$contactFormTitle[0]->description}}</p>
                <h3 class="mt60">{{$contactFormSubtitle[0]->title}}</h3>
                @foreach ($contactFormAddress as $address)
                    <p class="con-item">{{$address->address1}} <br> {{$address->address2}} </p>
                @endforeach
                @foreach ($contactFormPhone as $phone)
                    <p class="con-item">{{$phone->phone}}</p>
                @endforeach
                @foreach ($contactFormEmail as $email)
                    <p class="con-item">{{$email->email}}</p>
                @endforeach
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                <form class="form-class" id="con_form">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" placeholder="{{$contactFormPlaceholder[0]->placeholder}}">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="email" placeholder="{{$contactFormPlaceholder[1]->placeholder}}">
                        </div>
                        <div class="col-sm-12">
                            <select name="subject_id" id="" class="form-control mb-5">
                                <option value="">{{$contactFormPlaceholder[2]->placeholder}}</option>
                                @foreach ($contactFormSubjects as $subject)
                                    <option value="{{$subject->id}}">{{$subject->subject}}</option>
                                @endforeach
                            </select>
                            {{-- <input type="text" name="subject" placeholder="Subject"> --}}

                            <textarea name="message" placeholder="{{$contactFormPlaceholder[3]->placeholder}}" class="mt-5"></textarea>

                            <button class="site-btn">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->