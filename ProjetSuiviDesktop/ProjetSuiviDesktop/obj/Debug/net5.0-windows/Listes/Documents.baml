   M S B A M L   `   `   `  ����M  IProjetSuiviDesktop, Version=1.0.0.0, Culture=neutral, PublicKeyToken=nullE'clr-namespace:ProjetSuiviDesktop.ListesProjetSuiviDesktop.Listes  5   	   )    #ProjetSuiviDesktop.Listes.Documents   5   	   W SPresentationCore, Version=5.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35\ XPresentationFramework, Version=5.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35e aSystem.Windows.Controls.Ribbon, Version=5.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089R NWindowsBase, Version=5.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35F 9http://schemas.microsoft.com/winfx/2006/xaml/presentation     5   	   R NSystem.Xaml, Version=5.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     5   	   @d2http://schemas.microsoft.com/expression/blend/2008     5   	   Jmc;http://schemas.openxmlformats.org/markup-compatibility/2006     5   	   9local'clr-namespace:ProjetSuiviDesktop.Listes     5   	     � Title$  Liste des documents��5   
   $	��450��6&   $	��450��63   $	��800��6C   $	��800��6O      BackgroundWindow#���   6^   .��5	      � .+�5
   
   �  � RowDefinitions 5      �� 5      $��* �6    �� 5      $��4* �6    �� 5      $
��0.1* �6    �� 5      $��1* �6    �� 5      $
��0.1* �6    .+�5      �� -   5         ��Name$ titreWindow��5      $��0��6)   $��Liste des documents��66   $��Center=�6T   $��Center=�6o   $
��Bold"�6�   $��45(�6�     	TextLabel#���  6�   � 5      $��1��6    � ColumnDefinitions 5      �� 5      $
��0.1* �6'   �� 5      $��6* �6'   �� 5      $
��0.1* �6'   �� 5      $��1* �6'   �� 5      $
��0.1* �6'   .+�5      &   System.Windows.Controls.DataGrid  -   5          Name$ dg��5      $��1��6'      CanUserAddRows$ False��67      AutoGenerateColumns$ False��6N     SelectedBackground   	CellStyle# �  6j      Columns 5       0  *System.Windows.Controls.DataGridTextColumn  5!      ,  &System.Windows.Controls.DataGridColumn	   Header$	 Libellé du document��6-   
   Width5  /System.Windows.Controls.DataGridLengthConverter$
 1* 6n   1  +System.Windows.Controls.DataGridBoundColumn   Binding 6J   �� *LibelleDocument+6n   5#      � 5%      $��3��6    5&      �� 5'      $
��0.5* �6(   �� 5(      $��1* �6(   �� 5)      $
��0.5* �6(   �� 5*      $��1* �6(   �� 5+      $
��0.5* �6(   �� 5,      $��1* �6(   �� 5-      $
��0.5* �6(   .+�50      �� -   5        $��1��50      $��Ajouter��6*     BorderBoutton#���  6<     FondBoutton#���  6j   $��15(�6�   6�   �� 51      -   5        $��3��51      $��Modifier��6*   #���  6=   #���  6k   $��15(�6�   6�   �� 52      -   5        $��5��52      $��	Supprimer��6*   #���  6>   #���  6l   $��15(�6�   6�   53      54      � 55      $��3��6    56      �� 57      $
��0.1* �6'   �� 58      $
��6.1* �6'   �� 59      $��1* �6'   �� 5:      $
��0.1* �6'   .+�5<      � $��2��6    5=      �� 5>      $
��0.2* �6(   �� 5?      $��1* �6(   �� 5@      $
��0.2* �6(   .+�5B      �� -   5        $��1��5B      $��1��6*   $��Retour��6:   #���  6K   #���  6y   $��15(�6�   6�   5C      5G      5K      5L      5M      