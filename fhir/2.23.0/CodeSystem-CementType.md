# Cement type - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cement type**

## CodeSystem: Cement type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/CementType | *Version*:2.23.0 |
| Active as of 2022-10-13 | *Computable Name*:CementType |

 
Cement type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [CementDKR](ValueSet-CementDKR.md)
* [CementFemurTibiaPatellaDKR](ValueSet-CementFemurTibiaPatellaDKR.md)
* [CementHofteDHR](ValueSet-CementHofteDHR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "CementType",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/CementType",
  "version" : "2.23.0",
  "name" : "CementType",
  "title" : "Cement type",
  "status" : "active",
  "date" : "2022-10-13T00:00:00+02:00",
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
  "description" : "Cement type",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 22,
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
    "code" : "biomet_cement_lv",
    "display" : "Biomet: Bone Cement LV",
    "definition" : "Biomet: Bone Cement LV"
  },
  {
    "code" : "biomet_cement_r",
    "display" : "Biomet: Bone Cement R",
    "definition" : "Biomet: Bone Cement R"
  },
  {
    "code" : "biomet_cement_v",
    "display" : "Biomet: Bone Cement V",
    "definition" : "Biomet: Bone Cement V"
  },
  {
    "code" : "biomet_cement_plus",
    "display" : "Biomet: Plus Bone Cement",
    "definition" : "Biomet: Plus Bone Cement"
  },
  {
    "code" : "cmw1",
    "display" : "CMW I",
    "definition" : "CMW I"
  },
  {
    "code" : "cmw2",
    "display" : "CMW II",
    "definition" : "CMW II"
  },
  {
    "code" : "cmw3",
    "display" : "CMW III",
    "definition" : "CMW III"
  },
  {
    "code" : "copal_gc",
    "display" : "Copal G+C",
    "definition" : "Copal G+C"
  },
  {
    "code" : "copal_gv",
    "display" : "Copal G+V",
    "definition" : "Copal G+V"
  },
  {
    "code" : "lvc_standard",
    "display" : "LVC-standard",
    "definition" : "LVC-standard"
  },
  {
    "code" : "palacos",
    "display" : "Palacos",
    "definition" : "Palacos"
  },
  {
    "code" : "palacos_low",
    "display" : "Palacos low",
    "definition" : "Palacos low"
  },
  {
    "code" : "palacos_rg",
    "display" : "Palacos R+G",
    "definition" : "Palacos R+G"
  },
  {
    "code" : "refobacin_cement_lv",
    "display" : "Refobacin: Bone Cement LV",
    "definition" : "Refobacin: Bone Cement LV"
  },
  {
    "code" : "refobacin_cement_r",
    "display" : "Refobacin: Bone Cement R",
    "definition" : "Refobacin: Bone Cement R"
  },
  {
    "code" : "refobacin_cement_plus",
    "display" : "Refobacin: Plus Bone Cement",
    "definition" : "Refobacin: Plus Bone Cement"
  },
  {
    "code" : "refobacin_revision",
    "display" : "Refobacin: Revision",
    "definition" : "Refobacin: Revision"
  },
  {
    "code" : "simplex",
    "display" : "Simplex",
    "definition" : "Simplex"
  },
  {
    "code" : "simplex_p",
    "display" : "Simplex P",
    "definition" : "Simplex P"
  },
  {
    "code" : "smartmix",
    "display" : "SmartMix",
    "definition" : "SmartMix"
  },
  {
    "code" : "smartset",
    "display" : "SmartSet",
    "definition" : "SmartSet"
  },
  {
    "code" : "sulfix",
    "display" : "Sulfix",
    "definition" : "Sulfix"
  }]
}

```
