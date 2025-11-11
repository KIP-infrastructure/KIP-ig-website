# Search Parameter - write or read access sor on CarePLan - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Search Parameter - write or read access sor on CarePLan**

## Extension: Search Parameter - write or read access sor on CarePLan 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/StructureDefinition/access-sor-code | *Version*:2.13.0 |
| Active as of 2022-11-14 | *Computable Name*:CarePlanReadOrWriteAccess |

Search a CarePlan for readAccess or writeAccess SOR code. NOTE May match just the start of a string (https://build.fhir.org/codesystem-search-param-type.html#search-param-type-string)

**Context of Use**

**Usage info**

**Usages:**

* This Extension is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.kip.rkkp.fhir.ig.core|current/StructureDefinition/access-sor-code)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-access-sor-code.csv), [Excel](StructureDefinition-access-sor-code.xlsx), [Schematron](StructureDefinition-access-sor-code.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "access-sor-code",
  "url" : "https://kip.rkkp.dk/fhir/StructureDefinition/access-sor-code",
  "version" : "2.13.0",
  "name" : "CarePlanReadOrWriteAccess",
  "title" : "Search Parameter - write or read access sor on CarePLan",
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
  "description" : "Search a CarePlan for readAccess or writeAccess SOR code. NOTE May match just the start of a string (https://build.fhir.org/codesystem-search-param-type.html#search-param-type-string)",
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
        "short" : "Search Parameter - write or read access sor on CarePLan",
        "definition" : "Search a CarePlan for readAccess or writeAccess SOR code. NOTE May match just the start of a string (https://build.fhir.org/codesystem-search-param-type.html#search-param-type-string)"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "https://kip.rkkp.dk/fhir/StructureDefinition/access-sor-code"
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
