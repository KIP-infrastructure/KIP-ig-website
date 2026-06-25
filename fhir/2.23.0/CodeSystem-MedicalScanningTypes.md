# Medical scanning types - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medical scanning types**

## CodeSystem: Medical scanning types 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MedicalScanningTypes | *Version*:2.23.0 |
| Active as of 2022-06-27 | *Computable Name*:MedicalScanningTypesCS |

 
Medical scanning types 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Imaging](ValueSet-Imaging.md)
* [ImagingAngio](ValueSet-ImagingAngio.md)
* [MedicalScanningTypes](ValueSet-MedicalScanningTypes.md)
* [MedicalScanningTypes202412](ValueSet-MedicalScanningTypes202412.md)
* [PraeoperativPlanlaegningDSR](ValueSet-PraeoperativPlanlaegningDSR.md)
* [ScanningstyperCTMR](ValueSet-ScanningstyperCTMR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MedicalScanningTypes",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalScanningTypes",
  "version" : "2.23.0",
  "name" : "MedicalScanningTypesCS",
  "title" : "Medical scanning types",
  "status" : "active",
  "date" : "2022-06-27T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Medical scanning types",
  "caseSensitive" : false,
  "content" : "fragment",
  "property" : [{
    "code" : "comment",
    "uri" : "http://hl7.org/fhir/concept-properties#comment",
    "description" : "A string that provides additional detail pertinent to the use or understanding of the concept",
    "type" : "string"
  },
  {
    "code" : "effectiveDate",
    "uri" : "http://hl7.org/fhir/concept-properties#effectiveDate",
    "description" : "The date at which the concept status was last changed",
    "type" : "dateTime"
  },
  {
    "code" : "status",
    "uri" : "http://hl7.org/fhir/concept-properties#status",
    "description" : "A code that indicates the status of the concept. Typical values are active, experimental, deprecated, and retired",
    "type" : "code"
  },
  {
    "code" : "inactive",
    "uri" : "http://hl7.org/fhir/concept-properties#inactive",
    "description" : "True if the concept is not considered active - e.g. not a valid concept any more. Property type is boolean, default value is false. Note that the status property may also be used to indicate that a concept is inactive",
    "type" : "boolean"
  }],
  "concept" : [{
    "code" : "ct",
    "display" : "CT",
    "definition" : "Computed tomography (CT)"
  },
  {
    "code" : "mri",
    "display" : "MRI",
    "definition" : "Magnetic Resonance imaging (MRI)"
  },
  {
    "code" : "pet",
    "display" : "PET",
    "definition" : "Positron emission tomography (PET)"
  },
  {
    "code" : "x-ray",
    "display" : "X-ray",
    "definition" : "X-ray / Røntgen"
  },
  {
    "code" : "radiology",
    "display" : "Radiology",
    "definition" : "Radiology (x-ray)"
  },
  {
    "code" : "ultrasound",
    "display" : "Ultrasound",
    "definition" : "Medical ultrasound"
  },
  {
    "code" : "scintigraphy",
    "display" : "Scintigraphy",
    "definition" : "Scintigraphy"
  },
  {
    "code" : "dexa",
    "display" : "DEXA/DXA",
    "definition" : "Dual-emission X-ray absorptiometry (DEXA/DXA)"
  },
  {
    "code" : "ct_angio",
    "display" : "CT angio",
    "definition" : "CT angio"
  },
  {
    "code" : "mri_angio",
    "display" : "MR angio",
    "definition" : "MR angio"
  }]
}

```
