# Search Parameter - Sor QuestionnaireResponse - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Search Parameter - Sor QuestionnaireResponse**

## Extension: Search Parameter - Sor QuestionnaireResponse 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/StructureDefinition/sorCode | *Version*:2.14.2 |
| Active as of 2022-11-14 | *Computable Name*:SearchParameterSorQuestionnaireResponse |

Limit response of QuestionnaireResponses to match given SOR-codes.

**Context of Use**

**Usage info**

**Usages:**

* This Extension is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.kip.rkkp.fhir.ig.core|current/StructureDefinition/sorCode)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-sorCode.csv), [Excel](StructureDefinition-sorCode.xlsx), [Schematron](StructureDefinition-sorCode.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "sorCode",
  "url" : "https://kip.rkkp.dk/fhir/StructureDefinition/sorCode",
  "version" : "2.14.2",
  "name" : "SearchParameterSorQuestionnaireResponse",
  "title" : "Search Parameter - Sor QuestionnaireResponse",
  "status" : "active",
  "date" : "2022-11-14T00:00:00+02:00",
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
  "description" : "Limit response of QuestionnaireResponses to match given SOR-codes.",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [
    {
      "type" : "element",
      "expression" : "Element"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension",
        "path" : "Extension",
        "short" : "Search Parameter - Sor QuestionnaireResponse",
        "definition" : "Limit response of QuestionnaireResponses to match given SOR-codes."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "https://kip.rkkp.dk/fhir/StructureDefinition/sorCode"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "type" : [
          {
            "code" : "string"
          }
        ]
      }
    ]
  }
}

```
