# Cytogenetic examination - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cytogenetic examination**

## CodeSystem: Cytogenetic examination 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/CytogeneticExamination | *Version*:2.23.0 |
| Active as of 2022-06-14 | *Computable Name*:CytogeneticExaminationCS |

 
Examination; cytogenetic examination 

 This Code system is referenced in the content logical definition of the following value sets: 

* [CytogeneticExamination](ValueSet-CytogeneticExamination.md)
* [CytogeneticResult](ValueSet-CytogeneticResult.md)
* [CytogeneticResult202410](ValueSet-CytogeneticResult202410.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "CytogeneticExamination",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/CytogeneticExamination",
  "version" : "2.23.0",
  "name" : "CytogeneticExaminationCS",
  "title" : "Cytogenetic examination",
  "status" : "active",
  "date" : "2022-06-14T00:00:00+02:00",
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
  "description" : "Examination; cytogenetic examination",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 5,
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
    "code" : "jak2_v617f",
    "display" : "JAK2 V617F",
    "definition" : "JAK2 V617F"
  },
  {
    "code" : "jak2_exon12",
    "display" : "JAK2 Exon12",
    "definition" : "JAK2 Exon12"
  },
  {
    "code" : "mpl",
    "display" : "MPL",
    "definition" : "MPL"
  },
  {
    "code" : "cal-r",
    "display" : "CAL-R",
    "definition" : "CAL-R"
  },
  {
    "code" : "asxl1",
    "display" : "ASXL1",
    "definition" : "ASXL1"
  }]
}

```
