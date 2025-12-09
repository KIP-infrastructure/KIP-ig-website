# Search Parameter - UUID for Questionnaires - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Search Parameter - UUID for Questionnaires**

## Extension: Search Parameter - UUID for Questionnaires 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/StructureDefinition/QUuid | *Version*:2.17.1 |
| Active as of 2023-07-07 | *Computable Name*:SearchParameterQuestionnaireUuid |

Limit response of Questionnaires to match given UUID.

**Context of Use**

**Usage info**

**Usages:**

* This Extension is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.kip.rkkp.fhir.ig.core|current/StructureDefinition/QUuid)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-QUuid.csv), [Excel](StructureDefinition-QUuid.xlsx), [Schematron](StructureDefinition-QUuid.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "QUuid",
  "url" : "https://kip.rkkp.dk/fhir/StructureDefinition/QUuid",
  "version" : "2.17.1",
  "name" : "SearchParameterQuestionnaireUuid",
  "title" : "Search Parameter - UUID for Questionnaires",
  "status" : "active",
  "date" : "2023-07-07T00:00:00+02:00",
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
  "description" : "Limit response of Questionnaires to match given UUID.",
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
        "short" : "Search Parameter - UUID for Questionnaires",
        "definition" : "Limit response of Questionnaires to match given UUID."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "https://kip.rkkp.dk/fhir/StructureDefinition/QUuid"
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
