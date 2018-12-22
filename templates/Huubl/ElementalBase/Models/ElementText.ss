<<<<<<< HEAD
<section class="section" <% if $AOSEffect != "---" %>data-aos="$AOSEffect"<% end_if %> id="$Anchor" Style="<% if $EnableBackgroundColour %>background-color: {$BackgroundColour};<% end_if %><% if $BackgroundImage %>background-image:url($BackgroundImage.URL);background-repeat: no-repeat;background-size: cover;<% end_if %>background-position: $BackgroundPosition;<% if $BackgroundParalax %>background-attachment: fixed;<% end_if %><% if $MarginTop %>margin-top: 35px;<% end_if %><% if $MarginBottom %>margin-bottom: 35px;<% end_if %><% if $AddBorderBottom %>border-bottom-color:$BorderBottomColour;border-bottom-style:solid;border-bottom-width:1px;<% end_if %><% if $RemoveTopPadding %>padding-top:0px;<% end_if %><% if $RemoveBottomPadding %>padding-bottom:0px;<% end_if %>">
=======
<%--$VariantClasses--%>

<section class="section bg-white aos-init aos-animate" <% if $AOSEffect !== '---' %> data-aos="$AOSEffect" <% end_if %> id="$Anchor">
>>>>>>> d1e7adcc6db7c1627e21313580c7007524a7ec53
    <div class="container">
        <div class="row section-heading justify-content-center">
        <div class="col-md-{$Grid(8)}">
            <% if $ShowTitle %>
                <h2 class="heading mb-3">$Title </h2>
                <%--<{$TitleTagVariant} class="heading mb-3 {$TitleAlignmentVariant}">$Title</{$TitleTagVariant}>--%>
            <% end_if %>

        </div>
            <div class="col-md-{$Grid(8)}">
            $Text
        </div>
    </div>
    </div>
</section>

<<<<<<< HEAD
<% if $AOSEffect !== "---" %>
    <%--<% require css("https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css") %>--%>
    <%--<% require javascript("https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js") %>--%>
<% end_if %>
=======

>>>>>>> d1e7adcc6db7c1627e21313580c7007524a7ec53
