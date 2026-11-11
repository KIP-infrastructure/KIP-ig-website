# Operationsstue (flow/konventionel) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operationsstue (flow/konventionel)**

## ValueSet: Operationsstue (flow/konventionel) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OperationsstueFlowKonventionel | *Version*:2.27.3 |
| Active as of 2022-10-13 | *Computable Name*:OperationsstueFlowKonventionel |

 
Operationsstue (flow/konventionel) 

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
  "id" : "OperationsstueFlowKonventionel",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OperationsstueFlowKonventionel",
  "version" : "2.27.3",
  "name" : "OperationsstueFlowKonventionel",
  "title" : "Operationsstue (flow/konventionel)",
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
  "description" : "Operationsstue (flow/konventionel)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/OperatingRoom",
      "concept" : [{
        "code" : "turbulent_air",
        "display" : "Turbulent Air Flow (TAF)"
      },
      {
        "code" : "flow",
        "display" : "Flow stue (LAF)"
      },
      {
        "code" : "conventional",
        "display" : "Konventionel stue"
      }]
    }]
  }
}

```
