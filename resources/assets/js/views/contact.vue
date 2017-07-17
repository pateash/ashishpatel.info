<template>
    <div class="inner-item" style="margin-top:-2em">
        <div class="columns">
            <div class="column is-4-desktop">
                <h4>Contact Me</h4>
                You can reach me to any of these platforms,<br><br>
                <div class="social-icons">
                    <a target='_blank' title='linkedin' href=https://linkedin.com/in/ashishpatel0720 style="color:#006699"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    <a target='_blank' title='github' href=https://github.com/ashishpatel0720 style="color:#5d2973"><i class="fa fa-github fa-2x"></i></a>
                    <a target='_blank' title='Facebook' href=https://facebook.com/ashishpatel0720 style="color:#3b5998"><i class="fa fa-facebook-square fa-2x"></i></a>
                    <a target='_blank' title='Email' href="mailto:ashishpatel0720@gmail.com" ><i class="fa fa-envelope-o fa-2x"></i></a>
                    <a target='_blank' title='Instagram' href=https://instagram.com/ashishpatel0720 style="color: #cd486b"><i class="fa fa-instagram fa-2x"></i></a>
                    <a target='_blank' title='stackoverflow' href=https://stackoverflow.com/users/6178783/ashish-patel style="color:#f48024"><i class="fa fa-stack-overflow fa-2x"></i></a>
                    <a target='_blank' title='twitter' href=https://twitter.com/ashishpatel0720 style="color:#32cdfd"><i class="fa fa-twitter fa-2x"></i></a>
                 </div>

                <hr></hr>
                You Can Mail me at <span style="color:#5bc0de"><a href="mailto:ashishpatel0720@gmail.com">ashishpatel0720@gmail.com</a></span>
                <br>or call me at <br><span style="color:#985f0d"><a href="tel:+917705047900">+91-7705047900</a></span>
            </div>
            <div class="column is-8-desktop ">
                    <div class="contact-form ">
                        <form action="#" method="post">
                            <div class="columns">
                                <div class="column is-half">
                                    <label>Name</label> <input name="name" type="text" placeholder="">
                                </div>
                                <div class="column is-half">
                                    <label>Email</label> <input name="email" type="text" placeholder="">
                                </div>
                            </div>
                            <label>Message</label> <br>
                            <textarea name="message" placeholder=""></textarea>
                            <!--TODO: complete ajax request which will send an email to ashishpatel0720@gmail.com-->
                            <input type="submit" @click.prevent="submitMessage" value="Send Message" class="btn">
                        </form>
                    </div>
                </div>
        </div>
    </div>
</template>


<script>
    export default {
       submitMessage(){

           }
    }

</script>

<style>
    label{
        font-family:Quicksand;
    }
</style>