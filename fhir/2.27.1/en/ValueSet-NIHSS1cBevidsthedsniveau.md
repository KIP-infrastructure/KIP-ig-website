# NIHSS - 1c. Bevidsthedsniveau: ordrer - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NIHSS - 1c. Bevidsthedsniveau: ordrer**

## ValueSet: NIHSS - 1c. Bevidsthedsniveau: ordrer 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/NIHSS1cBevidsthedsniveau | *Version*:2.27.1 |
| Active as of 2022-06-24 | *Computable Name*:NIHSS1cBevidsthedsniveau |

 
The National Institute of Health Stroke Scale (NIHSS) - 1c. Bevidsthedsniveau: ordrer 

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
  "id" : "NIHSS1cBevidsthedsniveau",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/NIHSS1cBevidsthedsniveau",
  "version" : "2.27.1",
  "name" : "NIHSS1cBevidsthedsniveau",
  "title" : "NIHSS - 1c. Bevidsthedsniveau: ordrer",
  "status" : "active",
  "date" : "2022-06-24T00:00:00+02:00",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 1c. Bevidsthedsniveau: ordrer",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS1cLOC",
      "concept" : [{
        "code" : "0",
        "display" : "0 = Udfører begge ordrer korrekt"
      },
      {
        "code" : "1",
        "display" : "1 = Udfører én ordre korrekt"
      },
      {
        "code" : "2",
        "display" : "2 = Ingen af ordrerne udført korrekt"
      }]
    }]
  }
}

```
