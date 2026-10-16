# NIHSS - 1b. Bevidsthedsniveau: spørgsmål - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NIHSS - 1b. Bevidsthedsniveau: spørgsmål**

## ValueSet: NIHSS - 1b. Bevidsthedsniveau: spørgsmål 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/NIHSS1bBevidsthedsniveau | *Version*:2.27.0 |
| Active as of 2022-06-24 | *Computable Name*:NIHSS1bBevidsthedsniveau |

 
The National Institute of Health Stroke Scale (NIHSS) - 1b. Bevidsthedsniveau: spørgsmål 

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
  "id" : "NIHSS1bBevidsthedsniveau",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/NIHSS1bBevidsthedsniveau",
  "version" : "2.27.0",
  "name" : "NIHSS1bBevidsthedsniveau",
  "title" : "NIHSS - 1b. Bevidsthedsniveau: spørgsmål",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 1b. Bevidsthedsniveau: spørgsmål",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS1bLOC",
      "concept" : [{
        "code" : "0",
        "display" : "0 = Begge svar korrekt"
      },
      {
        "code" : "1",
        "display" : "1 = Ét af svarene korrekt"
      },
      {
        "code" : "2",
        "display" : "2 = Ingen af svarene er korrekte"
      }]
    }]
  }
}

```
