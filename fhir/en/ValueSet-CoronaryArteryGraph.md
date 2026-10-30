# KAG vurdering - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **KAG vurdering**

## ValueSet: KAG vurdering 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/CoronaryArteryGraph | *Version*:2.27.1 |
| Active as of 2022-06-07 | *Computable Name*:CoronaryArteryGraph |

 
Skal patienten få et KAG 

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
  "id" : "CoronaryArteryGraph",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/CoronaryArteryGraph",
  "version" : "2.27.1",
  "name" : "CoronaryArteryGraph",
  "title" : "KAG vurdering",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
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
  "description" : "Skal patienten få et KAG",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/CoronaryArteryGraph",
      "concept" : [{
        "code" : "coronary_artery_graph_instant_KAG",
        "display" : "Meget Høj Risiko: Akut KAG"
      },
      {
        "code" : "coronary_artery_graph_high_risk",
        "display" : "Høj risiko: KAG < 24 timer"
      },
      {
        "code" : "coronary_artery_graph_low_risk",
        "display" : "Lav risiko: Selektiv invasiv strategi"
      },
      {
        "code" : "coronary_artery_graph_unknown_risk",
        "display" : "Risikoestimering er ikke foretaget: Klinisk vurderet at KAG ikke er relevant"
      }]
    }]
  }
}

```
