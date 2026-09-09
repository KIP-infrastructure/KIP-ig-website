# Search Parameter - Latest for ValueSets - KIP Infrastructure v1.25.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Search Parameter - Latest for ValueSets**

## Extension: Search Parameter - Latest for ValueSets 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/StructureDefinition/VSLatest | *Version*:1.25.1 |
| Active as of 2026-07-09 | *Computable Name*:SearchParameterValueSetLatest |

Limit response of ValueSets to match given Latest.

**Context of Use**

**Usage info**

**Usages:**

* This Extension is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.kip.rkkp.fhir.ig.core|current/StructureDefinition/StructureDefinition-VSLatest.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-VSLatest.csv), [Excel](StructureDefinition-VSLatest.xlsx), [Schematron](StructureDefinition-VSLatest.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "VSLatest",
  "url" : "https://kip.rkkp.dk/fhir/StructureDefinition/VSLatest",
  "version" : "1.25.1",
  "name" : "SearchParameterValueSetLatest",
  "title" : "Search Parameter - Latest for ValueSets",
  "status" : "active",
  "date" : "2026-07-09T00:00:00+02:00",
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
  "description" : "Limit response of ValueSets to match given Latest.",
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
    "expression" : "Element"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "Search Parameter - Latest for ValueSets",
      "definition" : "Limit response of ValueSets to match given Latest."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "https://kip.rkkp.dk/fhir/StructureDefinition/VSLatest"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "boolean"
      }]
    }]
  }
}

```
