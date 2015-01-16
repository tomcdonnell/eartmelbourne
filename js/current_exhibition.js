/*
 * vim: ts=3 sw=3 et wrap co=100 go-=b
 */

var boolGalleryIsDragging = false;
var prevDragX             = null;

$(document).ready
(
   function ()
   {
      $('div.image-gallery').mousedown(onMouseDownImageGallery);
      $('div.image-gallery').mouseup(onMouseUpImageGallery    );
      $('div.content'      ).mouseleave(onMouseUpImageGallery );

      $('div.image-gallery').on('touchstart', onMouseDownImageGallery);
      $('div.image-gallery').on('touchend'  , onMouseUpImageGallery  );
      $('div.content'      ).on('touchleave', onMouseUpImageGallery  );
   }
);

function onMouseDownImageGallery(ev)
{
   boolGalleryIsDragging = true;
   $(window).mousemove(onMouseMoveWithinGallery);
   $(window).on('touchmove', onMouseMoveWithinGallery);
   prevDragX = ev.clientX;
   return false;
}

function onMouseMoveWithinGallery(ev)
{
   if (!boolGalleryIsDragging)
   {
      return false;
   }

   var imageGalleryDivJq = $('div.image-gallery');
   var xMove             = ev.clientX - prevDragX;
   prevDragX = ev.clientX;

   imageGalleryDivJq.prop('scrollLeft', imageGalleryDivJq.prop('scrollLeft') - xMove);
}

function onMouseUpImageGallery(ev)
{
   boolGalleryIsDragging = false;
}
