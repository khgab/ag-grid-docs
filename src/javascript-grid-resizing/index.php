<?php
$key = "Resizing";
$pageTitle = "ag-Grid Resizing";
$pageDescription = "ag-Grid Resizing";
$pageKeyboards = "ag-Grid Resizing";
include '../documentation-main/documentation_header.php';
?>

<div>

    <h2>Resizing</h2>

    <p>
        All columns can be resized by dragging the top right portion of the column.
    </p>

    <h3>Enable Resizing</h3>

    <p>
        Turn column resizing on for the grid by enabling resizing in the grid options.
    </p>

    <p>
        If you wish only some columns to be resizable, enable resizing for the grid,
        then suppress resizing for the particular column by setting <i>suppressResize=true</i>
        on the column definition.
    </p>

    <h3>Size Columns to Fit</h3>

    <p>
        Call api.sizeColumnsToFit() to make the currently visible columns fit the screen.
        The columns will scale (growing or shrinking) to fit the available width.
    </p>
    <p>
        If you don't want a particular column to be included in the auto resize, then
        set the column definition <i>suppressSizeToFit=true</i>. This is helpful
        if, for example, you want the first column to remain fixed with, but all other
        columns to fill the width of the table.
    </p>

    <note>
        <p>
            <i>sizeColumnsToFit</i> looks at the columns on the screen, and works out the width based on what it sees. It cannot see the columns that are not rendered due to column virtualisation so these are left out.
            What you are left with is enough 'packed' columns to fit your current page.
        </p>

        <p>
            Column Virtualisation is the technique the grid uses to render large amounts of columns with degrading performance by only
            rendering columns that are visible due to the horizontal scroll positions. Eg the grid can have 1000 columns
            with only 10 rendered if the horizontal scroll is only showing 10 columns.
        </p>

        <p>
            To get around this, you can turn off column virtualisation by setting grid property <i>suppressColumnVirtualisation=true</i>.
            So choice is yours - what do you want - column virtualisation working OR sizeColumnsToFit working.
        </p>
    </note>

    <h3>Auto-Size Columns</h3>

    <p>
        Just like Excel, each column can be 'auto resized' by double clicking the right side of the header
        rather than dragging it. When you do this, the grid will work out the best width
        to fit the contents of the cells in the column.
    </p>

    <note>
        The grid works out the best width by considering the virtually rendered rows only.
        For example, if your grid has 10,000 rows, but only 50 rendered due to virtualisation
        of rows, then only these 50 will be considered for working out the width
        to display. The rendered rows are all the rows you can see on the screen through the
        horizontal scroll plus a small buffer (default buffer size is 20).
    </note>

    <h3>Resizing Example</h3>

    <p>
        The example below shows resizing in action. Things to note are as follows:
        <ul>
        <li>Each column can be resized by dragging (or double clicking or auto resize) the
            right side of it's header.</li>
        <li>The button 'Size to Fit' calls api.sizeColumnsToFit()</li>
        <li>The button 'Auto-Size All' calls columnApi.autoSizeColumns()</li>
        <li>The first column is fixed with (ie suppressSizeToFit = true),
            which means it's size does not change when sizeColumnsToFit is called.</li>
        <li>The 'age' column has both a min and max size set, so resizing the column
            will be restricted by these, regardless of dragging the header or using on
            of the API buttons.</li>
        </ul>
    </p>
    <p>
        In the example below,  Also of note
        is the second column, which has both a min and max size set, which is also respected
        with sizeColumnsToFit. The remaining columns will spread to fill the remaining space
        after you press the button.
    </p>


    <show-example example="example2"></show-example>

</div>

<?php include '../documentation-main/documentation_footer.php';?>
