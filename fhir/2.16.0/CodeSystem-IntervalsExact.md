# Intervaller eksakte værdier - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Intervaller eksakte værdier**

## CodeSystem: Intervaller eksakte værdier 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/IntervalsExact | *Version*:2.16.0 |
| Active as of 2024-02-13 | *Computable Name*:IntervalsExact |

 
Intervaller med varierende eksakte værdier 

 This Code system is referenced in the content logical definition of the following value sets: 

* [POPQAaApDUGA](ValueSet-POPQAaApDUGA.md)
* [POPQBaDUGA](ValueSet-POPQBaDUGA.md)
* [POPQBpDUGA](ValueSet-POPQBpDUGA.md)
* [POPQCDDUGA](ValueSet-POPQCDDUGA.md)
* [POPQGhDUGA](ValueSet-POPQGhDUGA.md)
* [POPQKompartmentDUGA](ValueSet-POPQKompartmentDUGA.md)
* [POPQPbDUGA](ValueSet-POPQPbDUGA.md)
* [POPQTvlDUGA](ValueSet-POPQTvlDUGA.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "IntervalsExact",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/IntervalsExact",
  "version" : "2.16.0",
  "name" : "IntervalsExact",
  "title" : "Intervaller eksakte værdier",
  "status" : "active",
  "date" : "2024-02-13T00:00:00+02:00",
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
  "description" : "Intervaller med varierende eksakte værdier",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 51,
  "concept" : [
    {
      "code" : "m10",
      "display" : "-10",
      "definition" : "-10,0"
    },
    {
      "code" : "m9-5",
      "display" : "-9,5",
      "definition" : "-9,5"
    },
    {
      "code" : "m9",
      "display" : "-9",
      "definition" : "-9,0"
    },
    {
      "code" : "m8-5",
      "display" : "-8,5",
      "definition" : "-8,5"
    },
    {
      "code" : "m8",
      "display" : "-8",
      "definition" : "-8,0"
    },
    {
      "code" : "m7-5",
      "display" : "-7,5",
      "definition" : "-7,5"
    },
    {
      "code" : "m7",
      "display" : "-7",
      "definition" : "-7,0"
    },
    {
      "code" : "m6-5",
      "display" : "-6,5",
      "definition" : "-6,5"
    },
    {
      "code" : "m6",
      "display" : "-6",
      "definition" : "-6,0"
    },
    {
      "code" : "m5-5",
      "display" : "-5,5",
      "definition" : "-5,5"
    },
    {
      "code" : "m5",
      "display" : "-5",
      "definition" : "-5,0"
    },
    {
      "code" : "m4-5",
      "display" : "-4,5",
      "definition" : "-4,5"
    },
    {
      "code" : "m4",
      "display" : "-4",
      "definition" : "-4,0"
    },
    {
      "code" : "m3-5",
      "display" : "-3,5",
      "definition" : "-3,5"
    },
    {
      "code" : "m3",
      "display" : "-3",
      "definition" : "-3,0"
    },
    {
      "code" : "m2-5",
      "display" : "-2,5",
      "definition" : "-2,5"
    },
    {
      "code" : "m2",
      "display" : "-2",
      "definition" : "-2,0"
    },
    {
      "code" : "m1-5",
      "display" : "-1,5",
      "definition" : "-1,5"
    },
    {
      "code" : "m1",
      "display" : "-1",
      "definition" : "-1,0"
    },
    {
      "code" : "m0-5",
      "display" : "-0,5",
      "definition" : "-0,5"
    },
    {
      "code" : "0",
      "display" : "0",
      "definition" : "0,0"
    },
    {
      "code" : "0-5",
      "display" : "0,5",
      "definition" : "0,5"
    },
    {
      "code" : "1",
      "display" : "1",
      "definition" : "1,0"
    },
    {
      "code" : "1-5",
      "display" : "1,5",
      "definition" : "1,5"
    },
    {
      "code" : "2",
      "display" : "2",
      "definition" : "2,0"
    },
    {
      "code" : "2-5",
      "display" : "2,5",
      "definition" : "2,5"
    },
    {
      "code" : "3",
      "display" : "3",
      "definition" : "3,0"
    },
    {
      "code" : "3-5",
      "display" : "3,5",
      "definition" : "3,5"
    },
    {
      "code" : "4",
      "display" : "4",
      "definition" : "4,0"
    },
    {
      "code" : "4-5",
      "display" : "4,5",
      "definition" : "4,5"
    },
    {
      "code" : "5",
      "display" : "5",
      "definition" : "5,0"
    },
    {
      "code" : "5-5",
      "display" : "5,5",
      "definition" : "5,5"
    },
    {
      "code" : "6",
      "display" : "6",
      "definition" : "6,0"
    },
    {
      "code" : "6-5",
      "display" : "6,5",
      "definition" : "6,5"
    },
    {
      "code" : "7",
      "display" : "7",
      "definition" : "7,0"
    },
    {
      "code" : "7-5",
      "display" : "7,5",
      "definition" : "7,5"
    },
    {
      "code" : "8",
      "display" : "8",
      "definition" : "8,0"
    },
    {
      "code" : "8-5",
      "display" : "8,5",
      "definition" : "8,5"
    },
    {
      "code" : "9",
      "display" : "9",
      "definition" : "9,0"
    },
    {
      "code" : "9-5",
      "display" : "9,5",
      "definition" : "9,5"
    },
    {
      "code" : "10",
      "display" : "10",
      "definition" : "10,0"
    },
    {
      "code" : "10-5",
      "display" : "10,5",
      "definition" : "10,5"
    },
    {
      "code" : "11",
      "display" : "11",
      "definition" : "11,0"
    },
    {
      "code" : "11-5",
      "display" : "11,5",
      "definition" : "1,5"
    },
    {
      "code" : "12",
      "display" : "12",
      "definition" : "12,0"
    },
    {
      "code" : "12-5",
      "display" : "12,5",
      "definition" : "2,5"
    },
    {
      "code" : "13",
      "display" : "13",
      "definition" : "13,0"
    },
    {
      "code" : "13-5",
      "display" : "13,5",
      "definition" : "3,5"
    },
    {
      "code" : "14",
      "display" : "14",
      "definition" : "14,0"
    },
    {
      "code" : "14-5",
      "display" : "14,5",
      "definition" : "4,5"
    },
    {
      "code" : "15",
      "display" : "15",
      "definition" : "15,0"
    }
  ]
}

```
