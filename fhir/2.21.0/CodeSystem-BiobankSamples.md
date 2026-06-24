# Danish National Biobank - Samples/materials - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish National Biobank - Samples/materials**

## CodeSystem: Danish National Biobank - Samples/materials 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/BiobankSamples | *Version*:2.21.0 |
| Active as of 2022-07-08 | *Computable Name*:BiobankSamplesCS |

 
Danish National Biobank - Samples/materials 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BiobankSamples](ValueSet-BiobankSamples.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "BiobankSamples",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/BiobankSamples",
  "version" : "2.21.0",
  "name" : "BiobankSamplesCS",
  "title" : "Danish National Biobank - Samples/materials",
  "status" : "active",
  "date" : "2022-07-08T00:00:00+02:00",
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
  "description" : "Danish National Biobank - Samples/materials",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 10,
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
    "code" : "serum/plasma",
    "display" : "Serum/plasma",
    "definition" : "Serum/plasma"
  },
  {
    "code" : "marrow_plasma",
    "display" : "Marrow plasma",
    "definition" : "Marrow plasma"
  },
  {
    "code" : "marrow_cells",
    "display" : "Marrow cells",
    "definition" : "Marrow cells (unspecified/other)",
    "concept" : [{
      "code" : "mononuclear",
      "display" : "Mononuclear marrow cells",
      "definition" : "Mononuclear marrow cells (unspecified/other)",
      "concept" : [{
        "code" : "vital_frozen",
        "display" : "Vital frozen",
        "definition" : "Vital frozen / Vitalfrosne; dvs. usorterede ved -196°C"
      },
      {
        "code" : "not_vital_frozen",
        "display" : "Not vital frozen",
        "definition" : "Not vital frozen / Ikke vitalfrosne; dvs. usorterede ved -80°C"
      }]
    }]
  },
  {
    "code" : "myeloma_cells",
    "display" : "Myeloma cells",
    "definition" : "Myeloma cells (unespecified/other)",
    "concept" : [{
      "code" : "isolated",
      "display" : "Isolated myolema cells",
      "definition" : "Isolated myolema cells"
    }]
  },
  {
    "code" : "dna",
    "display" : "DNA",
    "definition" : "DNA"
  },
  {
    "code" : "rna",
    "display" : "RNA",
    "definition" : "RNA"
  }]
}

```
