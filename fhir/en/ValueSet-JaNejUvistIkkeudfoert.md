# Ja / Nej / Uvist / Ikke udført - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ja / Nej / Uvist / Ikke udført**

## ValueSet: Ja / Nej / Uvist / Ikke udført 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/JaNejUvistIkkeudfoert | *Version*:2.27.0 |
| Active as of 2022-07-12 | *Computable Name*:JaNejUvistIkkeudfoert |

 
Dækker over Ja/nej/Uvist/ikke udført. 

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
  "id" : "JaNejUvistIkkeudfoert",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/JaNejUvistIkkeudfoert",
  "version" : "2.27.0",
  "name" : "JaNejUvistIkkeudfoert",
  "title" : "Ja / Nej / Uvist / Ikke udført",
  "status" : "active",
  "date" : "2022-07-12T00:00:00+02:00",
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
  "description" : "Dækker over Ja/nej/Uvist/ikke udført.",
  "compose" : {
    "include" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "Y",
        "display" : "Ja"
      },
      {
        "code" : "N",
        "display" : "Nej"
      },
      {
        "code" : "ASKU",
        "display" : "Uvist/Usikker"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "not_performed",
        "display" : "Ikke foretaget"
      }]
    }]
  }
}

```
