(function () {
  'use strict';

  /**
   * @copyright  (C) 2023 JG Sanders. All rights reserved.
   * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
   */
  window.addEventListener('scroll', readingBarScroll);

  function readingBarScroll() {
    var progress = document.documentElement.scrollTop;
    var height   = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var percent  = (progress / height) * 100;
    document.getElementById("readingbar").style.width = percent + "%";
 };

})();
