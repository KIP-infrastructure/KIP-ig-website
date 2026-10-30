# Anæstesi - Regional [DHR] - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anæstesi - Regional [DHR]**

## ValueSet: Anæstesi - Regional [DHR] 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AnaestesiRegionalDHR | *Version*:2.27.1 |
| Active as of 2022-06-09 | *Computable Name*:AnaestesiRegionalDHR |

 
Anæstesi - Regional [DHR] 

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
  "id" : "AnaestesiRegionalDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AnaestesiRegionalDHR",
  "version" : "2.27.1",
  "name" : "AnaestesiRegionalDHR",
  "title" : "Anæstesi - Regional [DHR]",
  "status" : "active",
  "date" : "2022-06-09T00:00:00+02:00",
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
  "description" : "Anæstesi - Regional [DHR]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnasthesiaService",
      "concept" : [{
        "code" : "spinal",
        "display" : "Spinalanæstesi"
      },
      {
        "code" : "normotensive",
        "display" : "Normotensiv epiduralanæstesi"
      },
      {
        "code" : "hypotensive",
        "display" : "Hypotensiv epiduralanæstesi"
      }]
    }]
  }
}

```
