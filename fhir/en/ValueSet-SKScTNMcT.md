# SKS: cTNM klassifikation, cT - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SKS: cTNM klassifikation, cT**

## ValueSet: SKS: cTNM klassifikation, cT 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SKScTNMcT | *Version*:2.27.0 |
| Active as of 2022-06-08 | *Computable Name*:SKScTNMcT |

 
SKS koderne relevante cT tillægskoder 

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
  "id" : "SKScTNMcT",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SKScTNMcT",
  "version" : "2.27.0",
  "name" : "SKScTNMcT",
  "title" : "SKS: cTNM klassifikation, cT",
  "status" : "active",
  "date" : "2022-06-08T00:00:00+02:00",
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
  "description" : "SKS koderne relevante cT tillægskoder",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "AZCD10",
        "display" : "cT0: Primær tumor ikke påvist"
      },
      {
        "code" : "AZCD12",
        "display" : "cTis: Carcinoma in situ"
      },
      {
        "code" : "AZCD13",
        "display" : "cT1: Primær tumors størrelse/udstrækning"
      },
      {
        "code" : "AZCD14",
        "display" : "cT2: Primær tumors størrelse/udstrækning"
      },
      {
        "code" : "AZCD15",
        "display" : "cT3: Primær tumors størrelse/udstrækning"
      },
      {
        "code" : "AZCD16",
        "display" : "cT4: Primær tumors størrelse/udstrækning"
      },
      {
        "code" : "AZCD19",
        "display" : "cTx: Oplysning om tumors størrelse foreligger ikke i afd."
      }]
    }]
  }
}

```
