   M S B A M L   `   `   `  ����M  IProjetSuiviDesktop, Version=1.0.0.0, Culture=neutral, PublicKeyToken=nullE'clr-namespace:ProjetSuiviDesktop.ListesProjetSuiviDesktop.Listes  5   	   (    "ProjetSuiviDesktop.Listes.Absences   5   	   W SPresentationCore, Version=5.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35\ XPresentationFramework, Version=5.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35e aSystem.Windows.Controls.Ribbon, Version=5.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089R NWindowsBase, Version=5.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35F 9http://schemas.microsoft.com/winfx/2006/xaml/presentation     5   	   R NSystem.Xaml, Version=5.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     5   	   @d2http://schemas.microsoft.com/expression/blend/2008     5   	   Jmc;http://schemas.openxmlformats.org/markup-compatibility/2006     5   	   9local'clr-namespace:ProjetSuiviDesktop.Listes     5   	     � Title$  Liste des absences��5   	   $	��450��6$   $	��450��61   $	��800��6A   $	��800��6M      BackgroundWindow#���   6\   .��5	      � .+�5
   
   �  � RowDefinitions 5      �� 5      $��* �6    �� 5      $��4* �6    �� 5      $
��0.1* �6    �� 5      $��1* �6    �� 5      $
��0.1* �6    .+�5      �� -   5         ��Name$ titreWindow��5      $��0��6)   $��Liste des absences��66   $��Center=�6S   $��Center=�6n   $
��Bold"�6�   $��45(�6�     	TextLabel#���  6�   � 5      $��1��6    � ColumnDefinitions 5      �� 5      $
��0.1* �6'   �� 5      $��6* �6'   �� 5      $
��0.1* �6'   �� 5      $��1* �6'   �� 5      $
��0.1* �6'   .+�5      &   System.Windows.Controls.DataGrid  -   5          Name$ dg��5      $��1��6'      CanUserAddRows$ False��67      AutoGenerateColumns$ False��6N     SelectedBackground   	CellStyle# �  6j      Columns 5       0  *System.Windows.Controls.DataGridTextColumn  5!      ,  &System.Windows.Controls.DataGridColumn	   Header$	 Date de l'absence��6-   
   Width5  /System.Windows.Controls.DataGridLengthConverter$
 1* 6h   1  +System.Windows.Controls.DataGridBoundColumn   Binding 6H   �� *DateAbsence+6h     5"      $	 Nombre d'heure absent��6-   $
 1* 6p    6L   �� *NbrHeureAbsence+6p     5#      $	 Justification��6-   $
 2* 6f    6D   �� *Justification+6f   5%      � 5'      $��3��6    5(      �� 5)      $
��0.5* �6(   �� 5*      $��1* �6(   �� 5+      $
��0.5* �6(   �� 5,      $��1* �6(   �� 5-      $
��0.5* �6(   �� 5.      $��1* �6(   �� 5/      $
��0.5* �6(   .+�52      �� -   5        $��1��52      $��Ajouter��6*     BorderBoutton#���  6<     FondBoutton#���  6j   $��15(�6�   6�   �� 53      -   5        $��3��53      $��Modifier��6*   #���  6=   #���  6k   $��15(�6�   6�   �� 54      -   5        $��5��54      $��	Supprimer��6*   #���  6>   #���  6l   $��15(�6�   6�   55      56      � 57      $��3��6    58      �� 59      $
��0.1* �6'   �� 5:      $
��6.1* �6'   �� 5;      $��1* �6'   �� 5<      $
��0.1* �6'   .+�5>      � $��2��6    5?      �� 5@      $
��0.2* �6(   �� 5A      $��1* �6(   �� 5B      $
��0.2* �6(   .+�5D      �� -   5        $��1��5D      $��1��6*   $��Retour��6:   #���  6K   #���  6y   $��15(�6�   6�   5E      5I      5M      5N      5O      