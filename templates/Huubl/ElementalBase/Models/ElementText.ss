<%--$VariantClasses--%>

<section class="section bg-white aos-init aos-animate" <% if $AOSEffect !== '---' %> data-aos="$AOSEffect" <% end_if %> id="$Anchor">
    <div class="container">
        <div class="row section-heading justify-content-center">
            <div class="col-md-8 text-center">
                <% if $ShowTitle %>
                    <h2 class="heading mb-3">$Title</h2>
                <% end_if %>

            </div>
            <div class="col-md-8">
                 $Text
            </div>
        </div>
    </div>
</section>


