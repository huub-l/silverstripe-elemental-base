<section class="section"  <% if $AOSEffect != "---" %>data-aos="$AOSEffect"<% end_if %> id="$Anchor" Style="<% if $EnableBackgroundColour %>background-color: {$BackgroundColour};<% end_if %><% if $BackgroundImage %>background-image:url($BackgroundImage.URL); <% if $BackgroundRepeat %>background-repeat: repeat; <% else %> background-size: cover;<% end_if %><% end_if %>background-position: $BackgroundPosition;<% if $BackgroundParalax %>background-attachment: fixed;<% end_if %><% if $MarginTop %>margin-top: 35px;<% end_if %><% if $MarginBottom %>margin-bottom: 35px;<% end_if %><% if $AddBorderBottom %>border-bottom-color:$BorderBottomColour;border-bottom-style:solid;border-bottom-width:1px;<% end_if %><% if $RemoveTopPadding %>padding-top:0px;<% end_if %><% if $RemoveBottomPadding %>padding-bottom:0px;<% end_if %>">
    <div class="container">
        <div class="row section-heading justify-content-center">
        <div class="col-{$Grid(12)} col-md-{$Grid(8)} mx-auto">
            <% if $ShowTitle %>
                <h2 class="heading mb-3">$Title </h2>
                <%--<{$TitleTagVariant} class="heading mb-3 {$TitleAlignmentVariant}">$Title</{$TitleTagVariant}>--%>
            <% end_if %>

        </div>
            <div class="col-{$Grid(12)} col-md-{$Grid(8)} mx-auto">
            $Text  $BorderBottomStyle
        </div>
    </div>
    </div>
    <% if $BorderBottomStyle == "thema" %>
        <div class="border-white">
            <div></div>
            <div></div>
        </div>
    <% end_if %>
</section>
