# Behandlingsvarighed - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Behandlingsvarighed**

## ValueSet: Behandlingsvarighed 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BehandlingsVarighedDHR | *Version*:2.27.2 |
| Active as of 2022-07-06 | *Computable Name*:BehandlingsVarighedDHR |

 
Behandlingsvarighed [DHR] 

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
  "id" : "BehandlingsVarighedDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BehandlingsVarighedDHR",
  "version" : "2.27.2",
  "name" : "BehandlingsVarighedDHR",
  "title" : "Behandlingsvarighed",
  "status" : "active",
  "date" : "2022-07-06T00:00:00+02:00",
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
  "description" : "Behandlingsvarighed [DHR]",
  "compose" : {
    "include" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "NA",
        "display" : "Kun præoperativt (varighed angives ikke)"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureDuration",
      "concept" : [{
        "code" : "=<1",
        "display" : "Max. i 1 døgn"
      },
      {
        "code" : ">1",
        "display" : ">1 døgn"
      }]
    }]
  }
}

```
