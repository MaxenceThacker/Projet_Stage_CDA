   M S B A M L   `   `   `  ����M  IProjetSuiviDesktop, Version=1.0.0.0, Culture=neutral, PublicKeyToken=nullO,clr-namespace:ProjetSuiviDesktop.FormulairesProjetSuiviDesktop.Formulaires  5   	   1    +ProjetSuiviDesktop.Formulaires.DocumentForm   5   	   W SPresentationCore, Version=5.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35\ XPresentationFramework, Version=5.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35e aSystem.Windows.Controls.Ribbon, Version=5.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089R NWindowsBase, Version=5.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35F 9http://schemas.microsoft.com/winfx/2006/xaml/presentation     5   	   R NSystem.Xaml, Version=5.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     5   	   @d2http://schemas.microsoft.com/expression/blend/2008     5   	   Jmc;http://schemas.openxmlformats.org/markup-compatibility/2006     5   	   >local,clr-namespace:ProjetSuiviDesktop.Formulaires     5   	     � Title$  DocumentForm��5   	   $	��450��6   $	��800��6+   .��5	      �    BackgroundWindow#���   6    � RowDefinitions 5
   
   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6    � ColumnDefinitions 5   
   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5      $��1* �6   �� 5       $��1* �6   �� 5!      $��1* �6   �� 5"      $��1* �6   �� 5#      $��1* �6   .+�5%   
   �� $��Document��6   $��3��6#   $��1��63   $��4��6@   $��3��6T   $��Center=�6e   $��Center=�6�   $
��Bold"�6�   $��45(�6�     	TextLabel#���  6�   �� 5&   
   $��Libellé du document :��6   $��1��60   $��6��6@   $��Center=�6M   $��Center=�6o     Font#���  6�   #���  6�   $
��Left=�6�   $��4��6�   �� 5'   
   -   5         ��Name$ LibelleDocument��5'      $��5��6+   $��6��6;   $�� ��6H   $��Center=�6P   #���  6r   $��4��6�   �� 5(   
   -   5        $��FileNameTextBox��5(      $��1��6*   $��8��6:   $��Ajouter un fichier��6G   $��Center=�6a   #���  6�   $��4��6�    �� 
IsReadOnly$
 True��6�   �� 5)   
   -   5         ��Name$ BrowseButton��5)      $��Browse a file��6'   $��7��6?   $��8��6O     FondBoutton#���  6\     BorderBoutton#���  6�   #���  6�   $��2��6�   6�   �� 5*   
   -   5        $��
TextBlock1��5*      $��1��6&   $��9��66   $�� ��6C   #���  6K   $��4��6m   $
��Wrap=�6�   �� 5+   
   -   5        $��Valider��5+      $��4��6#   $��11��63   #���  6A   #���  6l   #���  6�   $��2��6�   �� 5,   
   -   5        $��Retour��5,      $��7��6"   $��11��62   #���  6@   #���  6k   #���  6�   $��2��6�   5-      5.      