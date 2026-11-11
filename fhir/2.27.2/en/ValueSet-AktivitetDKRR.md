# Aktivitet (DKRR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Aktivitet (DKRR)**

## ValueSet: Aktivitet (DKRR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AktivitetDKRR | *Version*:2.27.2 |
| Active as of 2022-09-19 | *Computable Name*:AktivitetDKRR |

 
Aktivitet (DKRR) 

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
  "id" : "AktivitetDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AktivitetDKRR",
  "version" : "2.27.2",
  "name" : "AktivitetDKRR",
  "title" : "Aktivitet (DKRR)",
  "status" : "active",
  "date" : "2022-09-19T00:00:00+02:00",
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
  "description" : "Aktivitet (DKRR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ActivityType",
      "concept" : [{
        "code" : "adl",
        "display" : "ADL"
      },
      {
        "code" : "sports",
        "display" : "Sport"
      },
      {
        "code" : "trafic",
        "display" : "Trafik"
      },
      {
        "code" : "work",
        "display" : "Arbejde"
      }]
    },
    {
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "UNK",
        "display" : "Ikke kendt"
      }]
    }]
  }
}

```
