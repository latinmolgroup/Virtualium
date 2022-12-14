??    ;      ?  O   ?        -   	  )   7     a     h  ?   w  v   ?  8   t  K   ?  N   ?     H     Z     o  =   ?  +   ?  /   ?  	        )     /  D   7  k   |  (   ?  ?  	     ?
     ?
  	   ?
        ?        ?     ?     ?     ?  !        7     ?     P     i     ?  }   ?  0     ?  P  0   ?  D     ?   `  ?   ?  ?  n  N  h  ?   ?  X   ?     ?     ?            E   *  '   p     ?  @   ?  /   ?       ?  #     ?     ?     	       k     Y   ?  3   ?  K     K   e     ?     ?     ?  *   ?       $   ,  	   Q  	   [     e  <   r  g   ?       (  6     _     u  	   ?     ?  ?   ?     /     H     O     \     u  	   ?     ?     ?     ?     ?  K   ?  $   <  >  a  *   ?  *   ?  U   ?  |   L   ?  ?   ?   ?"  ?   ~#  K   R$  
   ?$     ?$  
   ?$     ?$  <   ?$  $   %     C%  6   G%  !   ~%     ?%           *                  2   .         !   +           7   &                1       -       '   ,          )       ;   5      6       $          	                         0                           8               9      3       
   4      (   %          /         #   :         "    %(INSTALL)d to install %(INSTALL)d to install %(REMOVE)d to remove %(REMOVE)d to remove %s, %s <b>Example</b> <big><b>Checking available language support</b></big>

The availability of translations or writing aids can differ between languages. <small><b>Drag languages to arrange them in order of preference.</b>
Changes take effect next time you log in.</small> <small>Changes take effect next time you log in.</small> <small>Use the same format choice for startup and the login screen.</small> <small>Use the same language choices for startup and the login screen.</small> Apply System-Wide Chinese (simplified) Chinese (traditional) Configure multiple and native language support on your system Could not install the full language support Could not install the selected language support Currency: Date: Details Display numbers, dates and currency amounts in the usual format for: Failed to apply the '%s' format
choice. The examples may show up if you
close and re-open Language Support. Failed to authorize to install packages. If you need to type in languages, which require more complex input methods than just a simple key to letter mapping, you may want to enable this function.
For example, you will need this function for typing Chinese, Japanese, Korean or Vietnamese.
The recommended value for Ubuntu is "IBus".
If you want to use alternative input method systems, install the corresponding packages first and then choose the desired system here. Incomplete Language Support Install / Remove Languages... Installed Installed Languages It is impossible to install or remove any software. Please use the package manager "Synaptic" or run "sudo apt-get install -f" in a terminal to fix this issue at first. Keyboard input method system: Language Language Support Language for menus and windows: No language information available Number: Regional Formats Session Restart Required Set system default language Software database is broken Some translations or writing aids available for your chosen languages are not installed yet. Do you want to install them now? System policy prevented setting default language The language support files for your selected language seem to be incomplete. You can install the missing components by clicking on "Run this action now" and follow the instructions. An active internet connection is required. If you would like to do this at a later time, please use Language Support instead (click the icon at the very right of the top bar and select "System Settings... -> Language Support"). The language support is not installed completely The new language settings will take effect once you have logged out. The system does not have information about the available languages yet. Do you want to perform a network update to get them now?  This is perhaps a bug of this application. Please file a bug report at https://bugs.launchpad.net/ubuntu/+source/language-selector/+filebug This setting only affects the language your desktop and applications are displayed in. It does not set the system environment, like currency or date format settings. For that, use the settings in the Regional Formats tab.
The order of the values displayed here decides which translations to use for your desktop. If translations for the first language are not available, the next one in this list will be tried. The last entry of this list is always "English".
Every entry below "English" will be ignored. This will set the system environment like shown below and will also affect the preferred paper format and other region specific settings.
If you want to display the desktop in a different language than this, please select it in the "Language" tab.
Hence you should set this to a sensible value for the region in which you are located. Usually this is related to an error in your software archive or software manager. Check your preferences in Software Sources (click the icon at the very right of the top bar and select "System Settings... -> Software Sources"). When a language is installed, individual users can choose it in their Language settings. _Install _Remind Me Later _Update alternative datadir check for the given package(s) only -- separate packagenames by comma don't verify installed language support none output all available language support packages for all languages show installed packages as well as missing ones target language code Project-Id-Version: language-selector
Report-Msgid-Bugs-To: 
PO-Revision-Date: 2016-09-01 11:27+0000
Last-Translator: Walter Cheuk <wwycheuk@gmail.com>
Language-Team: Chinese (Hong Kong) <zh_HK@li.org>
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
Plural-Forms: nplurals=1; plural=0;
X-Launchpad-Export-Date: 2018-04-14 13:44+0000
X-Generator: Launchpad (build 18610)
Language: zh_HK
 安裝 %(INSTALL)d 個項目 移除 %(REMOVE)d 個項目 %s及%s <b>範例</b> <big><b>檢查可提供之語言支援</b></big>

個別語言不一定提供翻譯或所有文字工具。 <small><b>拖曳以更改優先次序。</b>
變更會在下次登入後生效。</small> <small>改動會於下次登入時生效。</small> <small>初始啟動與登入畫面都使用相同的格式選擇。</small> <small>初始啟動與登入畫面都使用相同的語言選擇。</small> 套用至全系統 中文(簡體) 中文(繁體) 在系統配置多重及原生語言支援 無法安裝完整語言支援 無法安裝已選取的語言支援 貨幣： 日期： 詳細資料 以下列地區慣用格式顯示數字、日期和貨幣： 無法套用「%s」格式選擇。
若您關閉且重新開啟「語言
支援」範例可能出現。 無法授權以安裝套件。 如果需要輸入較為複雜的文字，就需要啟用這個功能。
例如要輸入中文、日文、韓文或越南文都需要這個功能。
Ubuntu 建議的設定值是「iBus」。
如果想要使用其他輸入法系統，請先安裝相應的套件，然後在這裡選擇想要的。 語言支援未完備 安裝或移除語言... 已安裝 已安裝語言 無法安裝或移除套件。請先以「Synaptic 套件管理員」或在終端機執行「sudo apt-get install -f」修正問題。 鍵盤輸入法系統： 語言 語言支援 選單和視窗語言： 沒有語言資訊 數字： 區域格式 必需重新啟動作業階段 設定系統預設語言 軟件資料庫已損壞 某些所選語言的翻譯或文字工具未安裝。想馬上安裝嗎？ 系統政策防止設定預設語言 所選語言的支援檔案似乎不完整。你可以透過點擊「立刻執行此動作」按鈕，並遵照指示安裝缺少的元件。此動作需要網絡連線。若想要稍後執行，請改用「語言支援」 (點擊頂端列的最右端圖示，並選取「系統設定值」...-> 「語言支援」)。 對此語言的支援並未完整安裝好 新語言設定會在您登出後生效。 系統沒有可用語言的資訊。想馬上進行一次網絡更新來取得嗎？  這可能是程式的臭蟲。請在 https://bugs.launchpad.net/ubuntu/+source/language-selector/+filebug 提交臭蟲報告 此設定僅影響桌面與應用程式所要顯示的語言而不會設定系統環境，包括貨幣、日期格式等設定。若要設定系統環境，請使用「區域格式」分頁的設定。
此處顯示次序會決定桌面環境使用的翻譯。若尚未有第一個語言的翻譯，接著會嘗試清單中的下一個語言。清單的最後一個項目一定是「英文」。
系統不理會「英文」以下的項目。 這會設定如下方所顯示的系統環境，並且會影響偏好的紙張格式與其他區域性設定。
若想要以與此不同的語言顯示桌面，請在「語言」分頁選取。
因此您應該將它設為您所在區域的合理值。 通常這與您的軟件封存或軟件管理員的錯誤有關。請檢查您「軟件來源」內的偏好設定 (點擊頂端列的最右端圖示，並選取「系統設定值」... -> 「軟件來源」)。 安裝新語言後，個別用戶可於其各自「語言」設定選取。 安裝(_I) 稍後再提醒我(_R) 更新(_U) 替代的資料路徑 只檢查給予的套件 -- 以逗號 "," 隔開套件名稱 不要驗證已安裝的語言支援 無 輸出所有語言其所有可用的語言支援套件 顯示已安裝與欠缺的套件 目標語言代碼 