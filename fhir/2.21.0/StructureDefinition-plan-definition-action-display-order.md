# Display Order for PlanDefinition Action - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Display Order for PlanDefinition Action**

## Extension: Display Order for PlanDefinition Action 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/StructureDefinition/plan-definition-action-display-order | *Version*:2.21.0 |
| Active as of 2026-03-24 | *Computable Name*:PlanDefinitionActionDisplayOrder |

Specifies the desired display order of a PlanDefinition action (e.g. Questionnaire references). Lower values are displayed first.

**Context of Use**

**Usage info**

**Usages:**

* This Extension is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.kip.rkkp.fhir.ig.core|current/StructureDefinition/StructureDefinition-plan-definition-action-display-order.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-plan-definition-action-display-order.csv), [Excel](StructureDefinition-plan-definition-action-display-order.xlsx), [Schematron](StructureDefinition-plan-definition-action-display-order.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "plan-definition-action-display-order",
  "url" : "https://kip.rkkp.dk/fhir/StructureDefinition/plan-definition-action-display-order",
  "version" : "2.21.0",
  "name" : "PlanDefinitionActionDisplayOrder",
  "title" : "Display Order for PlanDefinition Action",
  "status" : "active",
  "date" : "2026-03-24T00:00:00+02:00",
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
  "description" : "Specifies the desired display order of a PlanDefinition action (e.g. Questionnaire references). Lower values are displayed first.",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [{
    "type" : "element",
    "expression" : "PlanDefinition.action"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "Display Order for PlanDefinition Action",
      "definition" : "Specifies the desired display order of a PlanDefinition action (e.g. Questionnaire references). Lower values are displayed first."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "https://kip.rkkp.dk/fhir/StructureDefinition/plan-definition-action-display-order"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "integer"
      }]
    }]
  }
}

```
