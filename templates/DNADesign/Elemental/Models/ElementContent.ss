<section class="section" <% if $AOSEffect != "---" %>data-aos="$AOSEffect"<% end_if %> id="$Anchor" Style="<% if $EnableBackgroundColour %>background-color: {$BackgroundColour};<% end_if %><% if $BackgroundImage %>background-image:url($BackgroundImage.URL);background-repeat: no-repeat;background-size: cover;<% end_if %>background-position: $BackgroundPosition;<% if $BackgroundParalax %>background-attachment: fixed;<% end_if %><% if $MarginTop %>margin-top: 35px;<% end_if %><% if $MarginBottom %>margin-bottom: 35px;<% end_if %><% if $AddBorderBottom %>border-bottom-color:$BorderBottomColour;border-bottom-style:solid;border-bottom-width:1px;<% end_if %><% if $RemoveTopPadding %>padding-top:0px;<% end_if %><% if $RemoveBottomPadding %>padding-bottom:0px;<% end_if %>">
    <div class="container">
        <div class="row section-heading justify-content-center">
            <div class="col-{$Grid(11)} col-md-{$Grid(8)} mx-auto">
                <% if $ShowTitle %>
                    <h2 class="heading mb-3">$Title NIEUW</h2>
                    <%--<{$TitleTagVariant} class="heading mb-3 {$TitleAlignmentVariant}">$Title</{$TitleTagVariant}>--%>
                <% end_if %>

            </div>
            <div class="col-{$Grid(11)} col-md-{$Grid(8)} mx-auto section-content">
                $HTML
            </div>
        </div>
    </div>
</section>

<% if $AOSEffect !== "---" %>
    <%--<% require css("https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css") %>--%>
    <%--<% require javascript("https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js") %>--%>
<% end_if %>
