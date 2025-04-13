<?php
use function Laravel\Folio\name;
name('component.table');
?>

<x-main>
    <x-slot name="title">Table Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="Table" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Table Component</h2>
        </x-slot>
        <p>The table component provides a flexible way to display tabular data with features like styling variants, datatables integration, and filtering capabilities.</p>
    </x-card>

    <!-- Basic Example Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <x-table title="Users List">
            <x-slot name="thead">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Verified At</th>
                </tr>
            </x-slot>

            <x-slot name="tbody">
                <tr>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>2024-01-01</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>jane@example.com</td>
                    <td>2024-01-02</td>
                </tr>
            </x-slot>
        </x-table>

        <div class="rounded-md mt-4">
            <pre><code class="language-blade">
&lt;x-table title="Users List"&gt;
    &lt;x-slot name="thead"&gt;
        &lt;tr&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Email&lt;/th&gt;
            &lt;th&gt;Verified At&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/x-slot&gt;

    &lt;x-slot name="tbody"&gt;
        &lt;tr&gt;
            &lt;td&gt;John Doe&lt;/td&gt;
            &lt;td&gt;john@example.com&lt;/td&gt;
            &lt;td&gt;2024-01-01&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/x-slot&gt;
&lt;/x-table&gt;</code></pre>
        </div>
    </x-card>

    <!-- Variants Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Table Variants</h2>
        </x-slot>

        <!-- Striped Table -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Striped Table</h3>
            </x-slot>

            <x-table title="Striped Users Table" style="striped">
                <x-slot name="thead">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </x-slot>

                <x-slot name="tbody">
                    <tr>
                        <td>John Doe</td>
                        <td>john@example.com</td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>jane@example.com</td>
                    </tr>
                </x-slot>
            </x-table>

            <div class="rounded-md mt-4">
                <pre><code class="language-blade">&lt;x-table title="Striped Users Table" style="striped"&gt;
    // ... table content ...
&lt;/x-table&gt;</code></pre>
            </div>
        </x-card>

        <!-- Hoverable Table -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Hoverable Table</h3>
            </x-slot>

            <x-table title="Hoverable Users Table" style="hover">
                <x-slot name="thead">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </x-slot>

                <x-slot name="tbody">
                    <tr>
                        <td>John Doe</td>
                        <td>john@example.com</td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>jane@example.com</td>
                    </tr>
                </x-slot>
            </x-table>

            <div class="rounded-md mt-4">
                <pre><code class="language-blade">&lt;x-table title="Hoverable Users Table" style="hover"&gt;
    // ... table content ...
&lt;/x-table&gt;</code></pre>
            </div>
        </x-card>
    </x-card>

    <!-- DataTable Example -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">DataTable Integration</h2>
        </x-slot>

        <x-table title="Users DataTable" datatable id="users-table" hasFilter>
            <x-slot name="actions">
                <button class="btn btn-primary">Add User</button>
            </x-slot>

            <x-slot name="filter">
                <div class="grid grid-cols-3 gap-4 p-4">
                    <input type="text" placeholder="Search by name" class="form-input">
                    <input type="text" placeholder="Search by email" class="form-input">
                    <button class="btn btn-primary">Apply Filter</button>
                </div>
            </x-slot>

            <x-slot name="thead">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </x-slot>

            <x-slot name="tbody">
                <tr>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>
                        <div class="flex gap-2">
                            <button class="btn btn-sm btn-info">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </div>
                    </td>
                </tr>
            </x-slot>
        </x-table>

        <div class="rounded-md mt-4">
            <pre><code class="language-blade">&lt;x-table title="Users DataTable" datatable id="users-table" hasFilter&gt;
    // ... table content with actions and filters ...
&lt;/x-table&gt;</code></pre>
        </div>
    </x-card>

    <!-- Component API -->
    <x-card class="mb-4">
        <x-table title="Table Component Props">
            <x-slot name="thead">
                <tr>
                    <th>Prop</th>
                    <th>Type</th>
                    <th>Default</th>
                    <th>Description</th>
                </tr>
            </x-slot>

            <x-slot name="tbody">
                <tr>
                    <td>style</td>
                    <td>string</td>
                    <td>''</td>
                    <td>Table style variant: 'hover', 'striped', or empty for default</td>
                </tr>
                <tr>
                    <td>title</td>
                    <td>string</td>
                    <td>'Table'</td>
                    <td>Title displayed in the table header</td>
                </tr>
                <tr>
                    <td>datatable</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Enable DataTables functionality</td>
                </tr>
                <tr>
                    <td>hasFilter</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Show/hide filter section</td>
                </tr>
                <tr>
                    <td>theadClass</td>
                    <td>string</td>
                    <td>''</td>
                    <td>Additional classes for thead element</td>
                </tr>
            </x-slot>
        </x-table>
    </x-card>

    <!-- Best Practices -->
    <x-card>
        <x-slot name="header">
            <h2 class="card-title">Best Practices</h2>
        </x-slot>

        <ul class="list-disc pl-6 space-y-2">
            <li>Use appropriate column headers that clearly describe the data</li>
            <li>Enable DataTables for tables with large datasets that require sorting and searching</li>
            <li>Implement filters when users need to narrow down data based on specific criteria</li>
            <li>Use hover or striped styles to improve readability of dense tables</li>
            <li>Include action buttons in a separate column for record manipulation</li>
            <li>Ensure proper alignment of numerical and text data in columns</li>
        </ul>
    </x-card>
</x-main>
