# Dialyseadgang - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dialyseadgang**

## CodeSystem: Dialyseadgang 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Dialyseadgang | *Version*:2.14.1 |
| Active as of 2024-01-10 | *Computable Name*:Dialyseadgang |

 
Dialyseadgang 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DialyseadgangDNSL](ValueSet-DialyseadgangDNSL.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Dialyseadgang",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Dialyseadgang",
  "version" : "2.14.1",
  "name" : "Dialyseadgang",
  "title" : "Dialyseadgang",
  "status" : "active",
  "date" : "2024-01-10T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Dialyseadgang",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "av_fistel",
      "display" : "AV fistel"
    },
    {
      "code" : "hd_permanent",
      "display" : "Permanent HD kateter som patientens blivende adgang"
    },
    {
      "code" : "hd_permanent_av",
      "display" : "Permanent HD kateter, hvor der planlægges senere AV fistel"
    },
    {
      "code" : "hd_temp",
      "display" : "Midlertidig HD kateter"
    }
  ]
}

```
