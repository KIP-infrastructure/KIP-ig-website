# Alloplasty operation types - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Alloplasty operation types**

## CodeSystem: Alloplasty operation types 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/AlloplastyTypes | *Version*:2.14.0 |
| Active as of 2025-03-04 | *Computable Name*:AlloplastyTypes |

 
Alloplasty operation types 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AlloplastiktypeDKR](ValueSet-AlloplastiktypeDKR.md)
* [HemialloplastikFemur](ValueSet-HemialloplastikFemur.md)
* [KomponentFemurDKRrevision](ValueSet-KomponentFemurDKRrevision.md)
* [KomponentFemurDKRrevision202503](ValueSet-KomponentFemurDKRrevision202503.md)
* [KomponentTibiaDKRrevision](ValueSet-KomponentTibiaDKRrevision.md)
* [KomponentTibiaDKRrevision202503](ValueSet-KomponentTibiaDKRrevision202503.md)
* [RevisionStatusDKR](ValueSet-RevisionStatusDKR.md)
* [TidligereOperationHofte](ValueSet-TidligereOperationHofte.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "AlloplastyTypes",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/AlloplastyTypes",
  "version" : "2.14.0",
  "name" : "AlloplastyTypes",
  "title" : "Alloplasty operation types",
  "status" : "active",
  "date" : "2025-03-04T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Alloplasty operation types",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 19,
  "property" : [
    {
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
    }
  ],
  "concept" : [
    {
      "code" : "hemialloplasty",
      "display" : "Hemialloplasty",
      "definition" : "Hemialloplasty",
      "concept" : [
        {
          "code" : "cemented",
          "display" : "Cemented component",
          "definition" : "Cementet component"
        },
        {
          "code" : "uncemented",
          "display" : "Uncemented component",
          "definition" : "Uncemented component"
        }
      ]
    },
    {
      "code" : "acetabulum_fracture",
      "display" : "Acetabulum fracture",
      "definition" : "Acetabulum fracture"
    },
    {
      "code" : "osteosynthesis",
      "display" : "Osteosynthesis",
      "definition" : "Osteosynthesis"
    },
    {
      "code" : "periacetabular_osteotomy",
      "display" : "Periacetabulær osteotomi",
      "definition" : "Periacetabulær osteotomi"
    },
    {
      "code" : "proximal_femur_osteotomy",
      "display" : "Proximal femur osteotomy",
      "definition" : "Proximal femur osteotomy"
    },
    {
      "code" : "total_alloplasty",
      "display" : "Total alloplasty",
      "definition" : "Total alloplasty"
    },
    {
      "code" : "medial_unilateral_knee",
      "display" : "Medial UKA",
      "definition" : "Medial UKA"
    },
    {
      "code" : "lateral_unitaleral_knee",
      "display" : "Lateral UKA",
      "definition" : "Lateral UKA"
    },
    {
      "code" : "patellofemoral_unitaleral_knee",
      "display" : "Patellofemoral UKA",
      "definition" : "Patellofemoral UKA"
    },
    {
      "code" : "hinge_knee",
      "display" : "Roterende hængselalloplastik",
      "definition" : "Roterende hængselalloplastik"
    },
    {
      "code" : "hinge_knee_resection",
      "display" : "Roterende hængselsalloplastik m. kondylresektion",
      "definition" : "Roterende hængselsalloplastik m. kondylresektion"
    },
    {
      "code" : "partial_resurfacing",
      "display" : "Partiel resurfacing",
      "definition" : "Partiel resurfacing"
    },
    {
      "code" : "cement_spacer_articulated",
      "display" : "Cementspacer, artikuleret",
      "definition" : "Cementspacer, artikuleret"
    },
    {
      "code" : "cement_spacer_fixated",
      "display" : "Cementspacer, fikseret",
      "definition" : "Cementspacer, fikseret"
    },
    {
      "code" : "spacer_insertion",
      "display" : "Fjernelse af komponent og isættelse af spacer",
      "definition" : "Fjernelse af komponent og isættelse af spacer",
      "property" : [
        {
          "code" : "comment",
          "valueString" : "Added"
        },
        {
          "code" : "effectiveDate",
          "valueDateTime" : "2025-04-03T00:00:00+01:00"
        },
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "inactive",
          "valueBoolean" : false
        }
      ]
    },
    {
      "code" : "artrodesis",
      "display" : "Artrodese",
      "definition" : "Artrodese"
    },
    {
      "code" : "femoral_amputation",
      "display" : "Femuramputation",
      "definition" : "Femuramputation"
    }
  ]
}

```
