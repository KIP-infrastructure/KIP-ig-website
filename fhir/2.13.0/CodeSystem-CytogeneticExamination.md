# Cytogenetic examination - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cytogenetic examination**

## CodeSystem: Cytogenetic examination 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/CytogeneticExamination | *Version*:2.13.0 |
| Active as of 2022-06-14 | *Computable Name*:CytogeneticExamination |

 
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
  "version" : "2.13.0",
  "name" : "CytogeneticExamination",
  "title" : "Cytogenetic examination",
  "status" : "active",
  "date" : "2022-06-14T00:00:00+02:00",
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
  "description" : "Examination; cytogenetic examination",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 5,
  "concept" : [
    {
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
    }
  ]
}

```
