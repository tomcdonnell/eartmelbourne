/*
 * vim: ts=3 sw=3 et wrap co=100 go-=b
 */

$(document).ready
(
   function ()
   {
      var sumOfLiWidths = 0;
      var lisJq         = $('div.footer ul li');

      for (var i = 0; i < lisJq.length; ++i)
      {
         sumOfLiWidths += $(lisJq[i]).width() + 2;
      }

      var liGapInPixels = Math.floor
      (
         ($('div.footer ul').width() - sumOfLiWidths) / (lisJq.length + 1)
      );

      $('div.footer ul li').css('margin-left', liGapInPixels + 'px');
   }
);

