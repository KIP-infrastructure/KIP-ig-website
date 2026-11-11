# Cytogenetic Examination - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cytogenetic Examination**

## ValueSet: Cytogenetic Examination 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/CytogeneticExamination | *Version*:2.27.3 |
| Active as of 2022-07-14 | *Computable Name*:CytogeneticExamination |

 
Hvilke cytogenetiske forandringer er undersøgt - DMPN 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "CytogeneticExamination",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/CytogeneticExamination",
  "version" : "2.27.3",
  "name" : "CytogeneticExamination",
  "title" : "Cytogenetic Examination",
  "status" : "active",
  "date" : "2022-07-14T00:00:00+02:00",
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
  "description" : "Hvilke cytogenetiske forandringer er undersøgt - DMPN",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/CytogeneticExamination",
      "concept" : [{
        "code" : "jak2_v617f",
        "display" : "JAK2 V617F"
      },
      {
        "code" : "jak2_exon12",
        "display" : "JAK2 Exon12"
      },
      {
        "code" : "mpl",
        "display" : "MPL"
      },
      {
        "code" : "cal-r",
        "display" : "CAL-R"
      },
      {
        "code" : "asxl1",
        "display" : "ASXL1"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andre"
      }]
    }]
  }
}

```
