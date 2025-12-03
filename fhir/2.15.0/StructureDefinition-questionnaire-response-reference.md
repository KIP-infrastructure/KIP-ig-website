# Search Parameter - QuestionnaireReponse on CarePLan - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Search Parameter - QuestionnaireReponse on CarePLan**

## Extension: Search Parameter - QuestionnaireReponse on CarePLan 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/StructureDefinition/questionnaire-response-reference | *Version*:2.15.0 |
| Active as of 2022-11-14 | *Computable Name*:SearchParameterQuestionnaireResponseOnCarePlan |

Find CarePlan which cointains a QuestionnaireResponse

**Context of Use**

**Usage info**

**Usages:**

* This Extension is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.kip.rkkp.fhir.ig.core|current/StructureDefinition/questionnaire-response-reference)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-questionnaire-response-reference.csv), [Excel](StructureDefinition-questionnaire-response-reference.xlsx), [Schematron](StructureDefinition-questionnaire-response-reference.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "questionnaire-response-reference",
  "url" : "https://kip.rkkp.dk/fhir/StructureDefinition/questionnaire-response-reference",
  "version" : "2.15.0",
  "name" : "SearchParameterQuestionnaireResponseOnCarePlan",
  "title" : "Search Parameter - QuestionnaireReponse on CarePLan",
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
  "description" : "Find CarePlan which cointains a QuestionnaireResponse",
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
        "short" : "Search Parameter - QuestionnaireReponse on CarePLan",
        "definition" : "Find CarePlan which cointains a QuestionnaireResponse"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "https://kip.rkkp.dk/fhir/StructureDefinition/questionnaire-response-reference"
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
