   M S B A M L   `   `   `  ����M  IProjetSuiviDesktop, Version=1.0.0.0, Culture=neutral, PublicKeyToken=nullO,clr-namespace:ProjetSuiviDesktop.FormulairesProjetSuiviDesktop.Formulaires  5   	   0    *ProjetSuiviDesktop.Formulaires.AbsenceForm   5   	   W SPresentationCore, Version=5.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35\ XPresentationFramework, Version=5.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35e aSystem.Windows.Controls.Ribbon, Version=5.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089R NWindowsBase, Version=5.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35F 9http://schemas.microsoft.com/winfx/2006/xaml/presentation     5   	   R NSystem.Xaml, Version=5.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     5   	   @d2http://schemas.microsoft.com/expression/blend/2008     5   	   Jmc;http://schemas.openxmlformats.org/markup-compatibility/2006     5   	   >local,clr-namespace:ProjetSuiviDesktop.Formulaires     5   	     � Title$  AbsenceForm��5   	   $	��450��6   $	��800��6*   .��5	      �    BackgroundWindow#���   6    � RowDefinitions 5
   
   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6    � ColumnDefinitions 5   
   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5       $��1* �6   �� 5!      $��1* �6   �� 5"      $��1* �6   �� 5#      $��1* �6   .+�5%   
   �� $��Absence��6   $��3��6"   $��1��62   $��4��6?   $��3��6S   $��Center=�6d   $��Center=�6�   $
��Bold"�6�   $��45(�6�     	TextLabel#���  6�   �� 5&   
   $��Date de l'absence :��6   $��1��6.   $��4��6>   $��Center=�6K   $��Center=�6o     Font#���  6�   #���  6�   $
��Left=�6�   $��4��6�   �� 5'   
   $!��Nombre d'heures d'absence :��6   $��1��66   $��6��6F   $��Center=�6S   $��Center=�6u   #���  6�   #���  6�   $
��Left=�6�   $��4��6�   �� 5(   
   $��Justification :��6   $��1��6*   $��8��6:   $��Center=�6G   $��Center=�6i   #���  6�   #���  6�   $
��Left=�6�   $��4��6�   (  "System.Windows.Controls.DatePicker  5)   
   -   5          Name$ DateAbsence��5)      $��4��6*   $��5��67   $��Center=�6G   $
��Left=�6b   $��2��6}   �� 5*   
   -   5         ��Name$ NbrHeureAbsence��5*      $��5��6+   $��6��6;   $�� ��6H   $��Center=�6P   #���  6r   $��2��6�   �� 5+   
   $��heures��6   $��7��6!   $��6��61   #���  6>   #���  6`   $��Center=�6�   �� 5,   
   -   5        $ Justification��5,      $��5��6)   $��8��69   $�� ��6F   #���  6N   $��3��6p   $��2��6�   �� 5-   
   -   5        $��Valider��5-      $��4��6#   $��11��63     FondBoutton#���  6A     BorderBoutton#���  6l   #���  6�   $��2��6�   �� 5.   
   -   5        $��Retour��5.      $��7��6"   $��11��62   #���  6@   #���  6k   #���  6�   $��2��6�   5/      50      