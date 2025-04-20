<?php
use function Laravel\Folio\name;
name('element.forms.input-file');
?>
<x-main title="Input File">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('element.index')" title="Element"></x-breadcrumb-item>
        <x-breadcrumb-item title="Input File" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Input File Component</h2>
        </x-slot>
        <p>The input file component provides a flexible and consistent way to capture file uploads from users. It supports both standard file inputs and drag-and-drop functionality, with customization options for labels, icons, and multiple file handling.</p>
    </x-card>

    <!-- Basic Example Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="mb-6 space-y-4">
            <x-input type="file" name="file" label="File" placeholder="Enter your file" />
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-input type="file" name="file" label="File" placeholder="Enter your file" class="form-input" /&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- With Icon Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">With Icon</h2>
        </x-slot>

        <div class="mb-6 space-y-4">
            <x-input type="file" name="file" label="File" placeholder="Enter your file" icon>
                <x-slot name="iconContent">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                    </svg>
                </x-slot>
            </x-input>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace">
&lt;x-input type="file" name="file" label="File" placeholder="Enter your file" class="form-input" icon&gt;
    &lt;x-slot name="iconContent"&gt;
        &lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file"&gt;
            &lt;path stroke="none" d="M0 0h24v24H0z" fill="none" /&gt;
            &lt;path d="M14 3v4a1 1 0 0 0 1 1h4" /&gt;
            &lt;path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /&gt;
        &lt;/svg&gt;
    &lt;/x-slot&gt;
&lt;/x-input&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Drag and drop-->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Drag and Drop</h2>
        </x-slot>

        <div class="mb-6 space-y-4">
            <x-drag-and-drop-input name="file"></x-drag-and-drop-input>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-drag-and-drop-input name="file"&gt;&lt;/x-drag-and-drop-input&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Drag and drop with custom label -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Custom Label</h2>
        </x-slot>

        <div class="mb-6 space-y-4">
            <x-drag-and-drop-input name="file" label="Upload your documents here"></x-drag-and-drop-input>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-drag-and-drop-input name="file" label="Upload your documents here"&gt;&lt;/x-drag-and-drop-input&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Multiple files -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Multiple Files</h2>
        </x-slot>

        <div class="mb-6 space-y-4">
            <x-drag-and-drop-input name="files[]" multiple></x-drag-and-drop-input>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-drag-and-drop-input name="files[]" multiple&gt;&lt;/x-drag-and-drop-input&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Usage Examples -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Common Use Cases</h2>
        </x-slot>

        <p class="mb-4">File input components can be used in various contexts:</p>

        <!-- Profile Picture Upload -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Profile Picture Upload</h3>
            </x-slot>

            <div class="mb-6">
                <form class="space-y-4">
                    <x-input type="file" name="avatar" label="Profile Picture" accept="image/*" icon>
                        <x-slot name="iconContent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-photo">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M15 8h.01" />
                                <path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" />
                                <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" />
                                <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" />
                            </svg>
                        </x-slot>
                    </x-input>

                    <x-button class="button-primary">Upload</x-button>
                </form>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-input type="file" name="avatar" label="Profile Picture" accept="image/*" icon&gt;
    &lt;x-slot name="iconContent"&gt;
        &lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-photo"&gt;
            &lt;path stroke="none" d="M0 0h24v24H0z" fill="none" /&gt;
            &lt;path d="M15 8h.01" /&gt;
            &lt;path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" /&gt;
            &lt;path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" /&gt;
            &lt;path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" /&gt;
        &lt;/svg&gt;
    &lt;/x-slot&gt;
&lt;/x-input&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Document Upload -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Document Upload</h3>
            </x-slot>

            <div class="mb-6">
                <form class="space-y-4">
                    <x-drag-and-drop-input name="documents[]" label="Upload your documents (PDF, DOC, DOCX)" accept=".pdf,.doc,.docx" multiple></x-drag-and-drop-input>
                    <x-button class="button-primary">Submit Documents</x-button>
                </form>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-drag-and-drop-input 
    name="documents[]" 
    label="Upload your documents (PDF, DOC, DOCX)" 
    accept=".pdf,.doc,.docx" 
    multiple&gt;
&lt;/x-drag-and-drop-input&gt;
                </code></pre>
            </div>
        </x-card>
    </x-card>

    <!-- Component API Cards -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Standard File Input API</h2>
        </x-slot>

        <x-table title="File Input Component Props">
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
                    <td>name</td>
                    <td>string</td>
                    <td>null</td>
                    <td>The name attribute for the input field, also used for error messages.</td>
                </tr>
                <tr>
                    <td>type</td>
                    <td>string</td>
                    <td>'file'</td>
                    <td>Set to 'file' for file inputs.</td>
                </tr>
                <tr>
                    <td>label</td>
                    <td>string</td>
                    <td>null</td>
                    <td>The label text to display above the input.</td>
                </tr>
                <tr>
                    <td>required</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Marks the field as required and adds a visual indicator.</td>
                </tr>
                <tr>
                    <td>icon</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Enables icon display with the input.</td>
                </tr>
                <tr>
                    <td>iconPosition</td>
                    <td>string</td>
                    <td>'right'</td>
                    <td>Position of the icon - 'left' or 'right'.</td>
                </tr>
                <tr>
                    <td>accept</td>
                    <td>string</td>
                    <td>null</td>
                    <td>File types to accept (e.g., 'image/*', '.pdf,.doc')</td>
                </tr>
                <tr>
                    <td>multiple</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Allows selection of multiple files.</td>
                </tr>
                <tr>
                    <td>class</td>
                    <td>string</td>
                    <td>null</td>
                    <td>Additional CSS classes to apply to the input.</td>
                </tr>
            </x-slot>
        </x-table>
    </x-card>

    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Drag and Drop Input API</h2>
        </x-slot>

        <x-table title="Drag and Drop Input Component Props">
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
                    <td>name</td>
                    <td>string</td>
                    <td>null</td>
                    <td>The name attribute for the input field. Use array notation (e.g., 'files[]') for multiple files.</td>
                </tr>
                <tr>
                    <td>label</td>
                    <td>string</td>
                    <td>'Drag and drop your files here or browse files'</td>
                    <td>The label text to display inside the dropzone.</td>
                </tr>
                <tr>
                    <td>multiple</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Allows selection of multiple files.</td>
                </tr>
                <tr>
                    <td>accept</td>
                    <td>string</td>
                    <td>null</td>
                    <td>File types to accept (e.g., 'image/*', '.pdf,.doc')</td>
                </tr>
                <tr>
                    <td>required</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Marks the field as required.</td>
                </tr>
            </x-slot>
        </x-table>
    </x-card>

    <!-- Best Practices Card -->
    <x-card>
        <x-slot name="header">
            <h2 class="card-title">Best Practices</h2>
        </x-slot>

        <ul class="list-disc pl-6 space-y-2">
            <li>Always specify the <code>accept</code> attribute to limit file types when appropriate.</li>
            <li>Use descriptive labels that clearly indicate what type of files are expected.</li>
            <li>Set reasonable file size limits on the server side and communicate them to users.</li>
            <li>For multiple file uploads, consider using the drag-and-drop component for better user experience.</li>
            <li>Provide immediate feedback when files are selected or uploaded.</li>
            <li>Include validation for file types, sizes, and dimensions when necessary.</li>
            <li>Consider security implications when handling file uploads and implement proper server-side validation.</li>
            <li>Show previews for image uploads when applicable.</li>
            <li>Use array notation (<code>name="files[]"</code>) for multiple file uploads to ensure proper handling.</li>
            <li>Consider adding progress indicators for large file uploads to improve user experience.</li>
        </ul>
    </x-card>
</x-main>
