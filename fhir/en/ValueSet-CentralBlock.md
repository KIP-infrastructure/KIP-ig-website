# Tidspunkt for central blokade - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Tidspunkt for central blokade**

## ValueSet: Tidspunkt for central blokade 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/CentralBlock | *Version*:2.27.1 |
| Active as of 2022-06-09 | *Computable Name*:CentralBlock |

 
Tidspunkt for central blokade 

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
  "id" : "CentralBlock",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/CentralBlock",
  "version" : "2.27.1",
  "name" : "CentralBlock",
  "title" : "Tidspunkt for central blokade",
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
  "description" : "Tidspunkt for central blokade",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/CentralBlock",
      "concept" : [{
        "code" : "block_perop",
        "display" : "Blokade anlagt peroperativt"
      },
      {
        "code" : "block_preop_WA",
        "display" : "Blokade anlagt præoperativt, videre forløb kirurgi MED anæstesi"
      },
      {
        "code" : "block_preop_WOA",
        "display" : "Blokade anlagt præoperativt, videre forløb kirurgi UDEN anæstesi"
      }]
    }]
  }
}

```
